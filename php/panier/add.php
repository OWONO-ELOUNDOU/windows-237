<?php
    require('../config.php');
    require('cart.class.php');

    $json=array('error'=>true);
    $panier = new Cart();

    if(!isset($_GET['id'])){
        $sql = "SELECT prestation_id FROM prestation WHERE prestation_id=:id", $data=array('id'=>$_GET['id']);
        $prestation = mysqli_query($conn, $sql, $data);
        $result = mysqli_fetch_all();
    
        if(empty($result)){
            $json['message']="ce produit n'existe pas";
        }
        $panier->add($prestation[0]->id);
        $json['error']=false;
        $json['total']=number_format($panier->total(),2,',',' ');
        $json['count']=$panier->count();
        $json['message']="le produit a bien ete ajouter a votre panier";
     } else{
        $json['message']="vous n,avez pas selectionner de produit a ajouter au panier";
    }
    echo json_encode($json);