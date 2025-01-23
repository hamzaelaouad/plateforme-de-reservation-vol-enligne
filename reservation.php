<?php
include "Connecter.php";
session_start();


    //$reservation_id = $_GET['id'];
    $reservation_id = $_SESSION['reservation_id'];
    $req = "SELECT r.*, v.villeDepart, v.villeArrivee, v.dateDepart, v.dateArrivee 
            FROM Reservation r
            JOIN Vol v ON r.vol_id = v.id
            WHERE r.id = $reservation_id";
    $res = $conn->query($req);

    if ($res->num_rows > 0) {
        $row = $res->fetch_assoc();
        $villeDepart = $row["villeDepart"];
        $villeArrivee = $row["villeArrivee"];
        $dateDepart = $row["dateDepart"];
        $dateArrivee = $row["dateArrivee"];
        $classe = $row["classe"];
        $prixTotal = $row["prixTotal"];
        $statut = $row["statut"];
    }
    //session_write_close();
    session_destroy();
        ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Détails de la réservation</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body { background: url('254381.jpg') no-repeat center center fixed; background-size: cover; font-family: Arial, sans-serif; }
                .container { background-color: rgba(255, 255, 255, 0.8); padding: 30px; border-radius: 10px; margin-top: 50px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); }
                h1 { color: #333; margin-bottom: 20px; font-weight: bold; text-align: center; }
                .reservation-details { margin-bottom: 30px; }
                .reservation-details p { font-size: 18px; margin-bottom: 10px; }
                .btn-back { display: block; width: 200px; margin: 0 auto; text-align: center; }
            </style>
        </head>
        <body>
            <div class="container">
                <h1>Détails de la réservation</h1>
                <div class="reservation-details">
                    <p><strong>Ville de Départ :</strong> <?php echo $villeDepart; ?></p>
                    <p><strong>Ville d Arrivee :</strong> <?php echo $villeArrivee; ?></p>
                    <p><strong>Date de Départ :</strong> <?php echo $dateDepart; ?></p>
                    <p><strong>Date d Arrivee :</strong> <?php echo $dateArrivee; ?></p>
                    <p><strong>Classe :</strong> <?php echo $classe; ?></p>
                    <p><strong>Prix Total :</strong> <?php echo $prixTotal; ?> €</p>
                    <p><strong>Statut :</strong> <?php echo $statut; ?></p>
                </div>
                <a href="affichage.php" class="btn btn-primary btn-back">Retour a l accueil</a>
            </div>
        </body>
        </html>
        <?php
    
?>