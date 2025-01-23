<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link href="ccc.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body style="background: url('254381.jpg') no-repeat center / cover">
    <?php
        include "Connecter.php";
    ?>
    <div class="wrapper">
        <form onsubmit="return valideforme1()" action="Ajouter.php" method="POST" >
            <h1>Ajouter Client</h1>
            
            <div class="input-box">
                <input type="text" id="nom" name="NOM" placeholder="Nom">
            </div>
            <div class="input-box">
                <input type="text" id="prenom" name="PRENOM" placeholder="Prénom">
            </div>
            <div class="input-box">
                <input type="email" id="mail" name="MAIL" placeholder="Email">
            </div>
            <div class="input-box">
                <input type="password" id="password" name="password" placeholder="password">
            </div>
            
            <button type="submit" class="btn">Valider</button>

        </form>
    </div>
    <script type="application/javascript" src="index.js"></script>
    
</body>
</html>
