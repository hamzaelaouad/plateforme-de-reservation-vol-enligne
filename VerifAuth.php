<?php
    include "Connecter.php";

    $email = $_POST['username'];
    $s1 = $_POST['password'];
    session_start();
    $_SESSION['mail'] = $email;

    $req = "SELECT * FROM utilisateur";
    $res = $conn->query($req);

    $found = false;  

    if ($res->num_rows > 0) { 
        while ($row = $res->fetch_assoc()){
            $mail = $row["email"];
            $password = $row["motDePasse"];

            if ($email == $mail && $s1 == $password) {
                $found = true;
                echo "nom: " . $row["nom"] . "<br>"; 
                echo "prenom: " . $row["prenom"] . "<br>"; 
                
                break; 
            }
        }
    }

    if ($found) {
       // echo "Bienvenue, $s!";
       header("Location: affichage.php?email=$email"); 
    exit;
    } else {
        echo "Mail ou mot de passe incorrect.";
    }

    $conn->close();
    // fermer la connexion
    
?>
