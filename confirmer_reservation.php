<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmer la réservation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: url('254381.jpg') no-repeat center center fixed; background-size: cover; } .container { background-color: rgba(255, 255, 255, 0.85); padding: 20px; border-radius: 10px; margin-top: 50px; } h1 { color: #333; margin-bottom: 20px; } .table { margin-bottom: 20px; } .form-group { margin-bottom: 20px; }
    </style>
</head>
<body>
    <?php
    include "Connecter.php";
    session_start();

    if (isset($_GET['ID']) ) {
        $vol_id = $_GET['ID']; 
        $req = "SELECT * FROM vol WHERE id = $vol_id";
        $res = $conn->query($req);

        if ($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            $villeDepart = $row["villeDepart"];
            $villeArrivee = $row["villeArrivee"];
            $dateDepart = $row["dateDepart"];
            $dateArrivee = $row["dateArrivee"];
            $prix = $row["prix"]; 
        }
    }

    ?>
            <div class="container">
                <h1 class="text-center">Confirmer la réservation</h1>
                <table class="table table-bordered">
                    <tr>
                        <th>Ville de Départ</th>
                        <td><?php echo $villeDepart; ?></td>
                    </tr>
                    <tr>
                        <th>Ville d'Arrivée</th>
                        <td><?php echo $villeArrivee; ?></td>
                    </tr>
                    <tr>
                        <th>Date de Départ</th>
                        <td><?php echo $dateDepart; ?></td>
                    </tr>
                    <tr>
                        <th>Date d'Arrivée</th>
                        <td><?php echo $dateArrivee; ?></td>
                    </tr>
                    <tr>
                        <th>Prix de base</th>
                        <td><?php echo $prix; ?> €</td>
                    </tr>
                </table>

                <form action="enregistrer_reservation.php" method="POST">
                    <input type="hidden" name="vol_id" value="<?php echo $vol_id; ?>">
                    <input type="hidden" name="utilisateur_id" value="<?php echo $utilisateur_id; ?>">
                    <div class="form-group">
                        <label for="classe" class="form-label">Choisissez la classe :</label>
                        <select name="classe" id="classe" class="form-control">
                            <option value="Economy">Economy</option>
                            <option value="Business">Business Class (+200 $)</option>
                            <option value="First">First Class (+400 $)</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Enregistrer la reservation</button>
                </form>
            </div>
</body>
</html>