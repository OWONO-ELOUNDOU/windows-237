<?php

    require('../config.php');
    require('document.class.php');

    $document = new Document;

    if(isset($_POST['submit'])){
        $document->setImage($_POST['image']);
        $document->setName($_POST['name']);

        $image = $document->getImage();
        $name = $document->getName();

        $sql = "SELECT * FROM document WHERE name='$name'";

        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) === 1) {
            echo "<script>alert('Ce document existe déja!')</script>";
        } else {
            $sql = "INSERT INTO document(name, image)
                VALUES('$name', '$image')";

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