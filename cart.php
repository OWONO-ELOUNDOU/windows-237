<?php require_once('assets/php/config.php'); ?>
<?php require_once('assets/php/front/header.php'); ?>

        <div class="small-container cart-page">
            <table>
                <tr>
                    <th>Services</th>
                    <th>Quantité</th>
                    <th>Prix</th>
                </tr>
                <?php
                    $id = mysqli_real_escape_string($connection, $_GET['id']);
                    $sql = "SELECT * FROM prestation WHERE prestation_id= $id";
                    $result = mysqli_query($connection, $sql);

                    while($rows = mysqli_fetch_assoc($result)){
                        echo '
                            <tr>
                                <td>
                                    <div class="cart-info">
                                        <img src="assets/Images/activities images/'.$rows['image'].'">
                                        <div>
                                            <p>'.$rows['description'].'</p>
                                            <small>Prix : '.$rows['price'].'</small>
                                            <br>
                                            <a href="#">Supprimer</a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" value="1">
                                </td>
                                <td>50€</td>
                            </tr>
                        ';
                    }
                ?>
                <!--
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="assets/Images/activities images/suivi et vérification.jpeg">
                            <div>
                                <p>suivi et vérification de documents</p>
                                <small>Prix : 50€</small>
                                <br>
                                <a href="#">Supprimer</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <input type="number" value="1">
                    </td>
                    <td>50€</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="assets/Images/activities images/recherche ou verification.jpeg">
                            <div>
                                <p>Recherche et vérification de documents</p>
                                <small>Prix : 50€</small>
                                <br>
                                <a href="#">Supprimer</a>
                            </div>
                        </div>
                    </td>
                    <td>
                        <input type="number" value="1">
                    </td>
                    <td>50€</td>
                </tr>
            -->
            </table>

            <div class="total-price">

                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>$200.00</td>
                    </tr>
                    <tr>
                        <td>Taxe</td>
                        <td>$35.00</td>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td>$230.00</td>
                    </tr>
                </table>
            </div>
        </div>


<?php require_once('assets/php/front/footer.php'); ?>