<?php
    class Document
    {
        private $_image;
        private $_name;

        public function setImage($image){
            $this->_image = $image;
        }
        public function getImage(){
            return $this->_image;
        }

        public function setName($name){
            $this->_name = $name;
        }
        public function getName(){
            return $this->_name;
        }
    }