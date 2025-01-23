<?php
session_start();

include "Connecter.php";
if (isset($_POST['vol_id']) && isset($_POST['classe'])) {
    $vol_id = $_POST['vol_id'];
    $classe = $_POST['classe'];
    $email = $_SESSION['mail'];
    $req1 = "SELECT id FROM utilisateur WHERE email = '$email'";
    //$utilisateur_id = $_SESSION['mail'];
    $res1 = $conn->query($req1);
    $row1 = $res1->fetch_assoc();
    $utilisateur_id = $row1["id"];
    


    $req = "SELECT prix FROM vol WHERE id = $vol_id";
    $res = $conn->query($req);
    $row = $res->fetch_assoc();
    $prixBase = $row["prix"];

    if ($classe == "Business") {
        $prixTotal = $prixBase + 200;
    } elseif ($classe == "First") {
        $prixTotal = $prixBase + 400;
    } else {
        $prixTotal = $prixBase;
    }

    $req = "INSERT INTO Reservation (utilisateur_id, vol_id, dateReservation, statut, classe, prixTotal)
            VALUES ($utilisateur_id, $vol_id, NOW(), 'En cours', '$classe', $prixTotal)";
    if ($conn->query($req) === TRUE) {
        $req = "SELECT id FROM Reservation WHERE utilisateur_id = $utilisateur_id AND vol_id = $vol_id";
        $res = $conn->query($req);
        $row = $res->fetch_assoc();
        $_SESSION['reservation_id'] = $row["id"];
        header("Location: reservation.php"); 
        exit();
    }
}
?>