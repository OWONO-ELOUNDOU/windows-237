<?php
    class Prestation
    {
        private $_image;
        private $_info;
        private $_price;
        private $_desctiption;
        
        public function setImage($image){
            $this->_image = $image;
        }
        public function getImage(){
            return $this->_image;
        }

        public function setInfo($info){
            $this->_info = $info;
        }
        public function getInfo(){
            return $this->_info;
        }

        public function setDescription($description){
            $this->_description = $description;
        }
        public function getDescription(){
            return $this->_description;
        }

        public function setPrice($price){
            $this->_price = $price;
        }
        public function getPrice(){
            return $this->_price;
        }
    }