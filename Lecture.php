<?php
$req = "SELECT * FROM vol";
$res = $conn->query($req); 

if ($res->num_rows > 0) { 
    echo "<form action='' method='POST' class='container mt-5'>";
    echo "<table class='table table-dark table-striped'>";

    echo "<thead>";
    echo "<tr>";
    echo "<th scope='col'>ID</th>";
    echo "<th scope='col'>Ville de Départ</th>";
    echo "<th scope='col'>Ville d'Arrivée</th>";
    echo "<th scope='col'>Date de Départ</th>";
    echo "<th scope='col'>Date d'Arrivée</th>";
    echo "<th scope='col'>Prix</th>";
    echo "<th scope='col'>Sélectionner</th>";
    echo "</tr>";
    echo "</thead>";

    echo "<tbody>";
    while ($row = $res->fetch_assoc()){
        $ID = $row["id"]; 
        $villeDepart = $row["villeDepart"]; 
        $villeArrivee = $row["villeArrivee"];
        $dateDepart = $row["dateDepart"];
        $dateArrivee = $row["dateArrivee"];
        $prix = $row["prix"];

        echo "<tr>";
        echo "<td>$ID</td>";
        echo "<td>$villeDepart</td>";
        echo "<td>$villeArrivee</td>";
        echo "<td>$dateDepart</td>";
        echo "<td>$dateArrivee</td>";
        echo "<td>$prix</td>";
        echo "<td class='text-center'><input type='checkbox' ></td>";
        echo "<td ><a href='confirmer_reservation.php?ID=$ID' style='color:white;'>choisir</a></td>";
        
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "<button type='submit' class='btn btn-primary'>Confirmer</button>";
    echo "</form>";
}
?>