<?php
    class User{
        
        private $lastName;
        private $firstName;
        
        public function getLastName(){
            return $this->lastName;
        }
        
        public function setLastName($value){
            $this->lastName = $value;
        }
        
        public function getFirstName(){
            return $this->firstName;
        }
        
        public function setFirstName($value){
            $this->firstName = $value;
        }
        
        public function __construct($lastName, $firstName)
        {
            $this->lastName = $lastName;
            $this->firstName = $firstName;
        }
        
    }
?>