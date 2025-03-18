<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
    
</head>
<body>
<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "GestionVol";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("pb-Connexion  ");
}
//echo '<div style="color:white;margin">Connexion etablie.</div>';
//  $conn->connect_error





?>
</body>
</html>
