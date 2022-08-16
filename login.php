<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Windows 237</title>
    <link rel="stylesheet" href="assets/CSS/register.css">
    <script src="https://kit.fontawesome.com/b63f40c510.js" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container login-box">
        <form action="assets/php/user/user_login.php" method="POST" id="logform">
            <div class="title-box">
                <h2>Connexion</h2>
                <?php if(isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
            </div>
            <div class="connexion-info">
                <div class="input-box">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="user" placeholder="Username">
                </div>
                <div class="input-box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="pass" placeholder="Mot de passe">
                </div>
                <div class="button">
                    <button type="submit">Se Connecter</button>
                    <p>S'inscrire ici <a href="register.html">Inscription</a></p>
                </div>
            </div>
        </form>
    </div>

</body>
</html>