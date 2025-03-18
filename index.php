<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form-validation</title>
    <link href="ccc.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
</head>
<body style="background: url('254381.jpg') no-repeat center / cover">
    <div class="wrapper">
      <form  action= "verifAuth.php" onsubmit="return valideforme()" method="POST" >
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="username" id="username" placeholder="Username" >
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" id="password" placeholder="Password"  >
                <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="remember">
                <label><input type="checkbox"> Remember me</label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit" class="btn" name="btns" value="submit">Envoyer</button>
            <br><br>
            <button type="reset" class="btn" value="envoyer" name="btns">Annuler</button>
            <div class="registre-link">
                <p>Don't have an account? <a href="identif.php">Register</a></p> 
                
            </div>
        </form>
    </div>
    <script type="application/javascript" src="index.js"></script>

</body>
</html>
