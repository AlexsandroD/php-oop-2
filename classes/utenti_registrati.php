<?php
    class Utente{
        private $first_name;
        private $last_name;
        private $membership;

        public function __construct($_first_name,$_last_name,$_membership){
            $this->first_name = $_first_name;
            $this->last_name = $_last_name;
            $this->membership = $_membership;
        }
    }
?>