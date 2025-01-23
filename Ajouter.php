<?php
include "Connecter.php";
$nom=$_POST['Nom'];
$prenom=$_POST['PRENOM'];
$mail=$_POST['MAIL'];
$password=$_POST['password'];

$req = "INSERT INTO Utilisateur (nom, prenom, email, motDePasse) 
        VALUES ( '$nom', '$prenom', '$mail', '$password')";

$res = $conn->query($req);

if ($res === TRUE) {
    header("Location: index.php"); 
    exit;
} else {
    echo "Erreur lors de l'ajout du client : " . $conn->error;
}

$conn->close();

?>
