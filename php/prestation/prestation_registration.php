<?php

    require('../config.php');
    require('prestation.class.php');

    $prestation = new Prestation;

    if(isset($_POST['submit'])){
        $prestation->setImage($_POST['image']);
        $prestation->setInfo($_POST['info']);
        $prestation->setDescription($_POST['description']);
        $prestation->setPrice($_POST['price']);

        $image = $prestation->getImage();
        $info = $prestation->getInfo();
        $details = $prestation->getdescription();
        $prix = $prestation->getPrice();

        $sql = "SELECT * FROM prestation WHERE description='$info'";

        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) === 1) {
            echo "<script>alert('Ce service existe déja!')</script>";
        } else {
            $sql = "INSERT INTO prestation(image, description, price, details)
                VALUES('$image', '$info', '$prix', '$details')";

            $request = mysqli_query($connection, $sql);

            if($request){
                echo "<script>alert('Enregistrement effectué!')</script>";
            } else {
                echo "<script>alert('une erreur est survenue!')</script>";
            }
        }
    } else {
        echo "<script>alert('une erreur est survenue!')</script>";
    }