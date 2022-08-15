<?php
    class User
    {
        private $_fname;
        private $_lname;
        private $_email;
        private $_password;
        private $_phone;
        private $_street;
        private $_twon;
        private $_country;

        // déclaration des méthodes
        public function setName($name){
            $this->_fname = $name;
        }
        public function getName(){
            return $this->_fname;
        }

        public function setSurname($name1){
            $this->_lname = $name1;
        }
        public function getSurname(){
            return $this->_lname;
        }

        public function setEmail($email){
            $this->_email = $email;
        }
        public function getEmail(){
            return $this->_email;
        }

        public function setPassword($password){
            $this->_password = $password;
        }
        public function getPassword(){
            return $this->_password;
        }

        public function setPhone($phone){
            $this->_phone = $phone;
        }
        public function getPhone(){
            return $this->_phone;
        }

        public function setStreet($street){
            $this->_street = $street;
        }
        public function getStreet(){
            return $this->_street;
        }

        public function setTwon($twon){
            $this->_twon = $twon;
        }
        public function getTwon(){
            return $this->_twon;
        }

        public function setCountry($country){
            $this->_country = $country;
        }
        public function getCountry(){
            return $this->_country;
        }
    }


?>