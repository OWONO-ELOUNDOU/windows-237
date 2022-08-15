<?php
    class Cart
    {
        public function __construct(){
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = array();
            }
            if(isset($_GET['addcart'])){
                $this->add($_GET['addcart']);
            }
            if(isset($_GET['delcart'])){
                $this->del($_GET['delcart']);
            }
            if(isset($_POST['cart']['quantity'])){
                $this->del($_GET['delcart']);
            }
        }

        public function total(){
            require('../config.php');
            $total=0;
            $ids=array_keys($_SESSION['cart']);
                                if(empty($ids)){
                                    $prestation=array();
                                }else{
                                    $sql= "SELECT prestation_id, price FROM prestation WHERE prestation_id IN ('.implode(',',$ids).')";
                                    $request = mysqli_query($conn, $sql);
                                    $results= mysqli_fetch_all($request);
                                 }
          foreach( $results as $result){
                  $total+= $result->price * $_SESSION['cart'][$result->prestation_id];
          }  
          return $total;
    
        }

        public function count(){
            return array_sum($_SESSION['cart']);
         }

        public function add($prestation_id){
            if(isset( $_SESSION['cart'][$prestation_id])){
                $_SESSION['cart'][$prestation_id]++;
            } else{
                $_SESSION['cart'][$prestation_id]=1;
            }
        }

        public function del($prestation_id){
            unset( $_SESSION['cart'][$prestation_id]);
        }
    }