<?php 
    require_once("assets/php/config.php");
    if(isset($_SESSION['user_id']) && isset($_SESSION['name'])) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="assets/CSS/register.css">
</head>
<body>
    
    <div class="container contact-box">
        <div class="content">
            <form method="GET" action="service.php">
                <div class="left-side">
                    <div class="topic-text">Service Solliciter</div>
                    <p>Présenter, expliquer, organiser et planifier votre besoin</p>
                    <div class="input-box">
                        <label>Choisissez votre service</label>
                        <select name="choice">
                            <option id="daily">Service Ponctuel</option>
                            <option id="demand">Service à la Demande</option>
                            <option id="free">Service Gratuit</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <label>Date de votre besoin</label>
                        <input type="date" class="date">
                    </div>
                    <div class="input-box">
                        <label>Heure votre besoin</label>
                        <input type="time" value="00:00"  class="time">
                    </div>
                    <div class="input-box">
                        <label>Ville de votre service</label>
                        <input type="text" placeholder="Entrer la ville">
                    </div>
                </div>
                <div class="right-side">
                    <div class="input-box message-box">
                        <label>Description du service</label>
                        <textarea placeholder="Nature et détails de votre besoin"></textarea>
                    </div>
                    <div class="input-box">
                        <label>Jour et moment de votre service</label>
                        <input type="date"  class="date">
                        <input type="text" placeholder="Entrer le moment du service">
                    </div>
                    <div class="input-box message-box">
                        <label>Autre(s) détails (facultatif)</label>
                        <textarea class="others-details" placeholder="Détails supplémentaire"></textarea>
                    </div>
                    <div class="button">
                        <input type="button" name="send" class="contact-btn" value="Envoyer">
                    </div>
                </div>
            </form>
            <?php

                if(isset($_GET['send']))
                {
                    die("<script>alert('Bonjour')</script>");
                    //echo "Vous avez sélectionné ".$_GET['choice'];
                }

            ?>
        </div>
    </div>

</body>
</html>
<?php 
    } else {
        header("Location: login.php");
        exit();
    }
?>