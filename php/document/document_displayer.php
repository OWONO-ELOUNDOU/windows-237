<?php
    require("../config.php");

    $sql = "SELECT * FROM document";
    $request = mysqli_query($conn, $sql);

    while($rows = mysqli_fetch_assoc($request)){
        $id = $rows['document_id'];
    
        echo '<div class="card">';
        echo '<div class="card-img">';
        echo '<img src="assets/Images/images docs/'.$rows['image'].'">';
        echo '</div>';
        echo '<div class="card-info">';
        echo '<h4>'.$rows['name'].'</h4>';
        echo '<a href="assets/files/'.$rows['name'].'" download>Télécharger</a>';
        echo '</div>';
        echo '</div>';
    }
?>