<?php 
    require_once("assets/php/config.php");
    if(isset($_SESSION['user_id']) && isset($_SESSION['name'])){
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/CSS/style1.css">
</head>
<body>
    <div class="details-container">
        <?php
            $id = mysqli_real_escape_string($connection, $_GET['id']);
            $sql = "SELECT * FROM prestation WHERE prestation_id= $id";
            $result = mysqli_query($connection, $sql);
            
            while($rows = mysqli_fetch_assoc($result)){
                echo '
                    <div class="product">
                        <div class="gallery">
                            <img src="assets/Images/activities images/'.$rows['image'].'">
                        </div>
                        <div class="details">
                            <h1>'.$rows['description'].'</h1>
                            <h2>60€</h2>
                            <p>'.$rows['details'].'</p>

                            <form>
                                <label for="document">
                                    <span>Document(s)</span>
                                    <input type="text" id="document" placeholder="Nom du Document">
                                </label>
                                <label for="quantite">
                                    <span>Quantité</span>
                                    <input type="number" id="quantite" value="1">
                                </label>

                                <a href="cart.php?id='.$id.'" class="cart-btn">Ajouter au panier</a>
                            </form>
                        </div>
                    </div>';
            }
        ?>

        <!--
        <div class="warning">
            <h2>Confirmez-vous cette commande ?</h2>
            <div class="button">
                <button class="cancel">Annuler</button>
                <a href="cart.php?id=<?php $id ?>" class="confirm">Confirmer</a>
            </div>
        </div>
        -->
    </div>
</body>
</html>
<?php 
    } else {
        header("Location: login.php");
        exit();
    }
?>