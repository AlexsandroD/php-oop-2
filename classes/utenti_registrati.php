<?php
    class Utente{
        public $first_name;
        public $last_name;
        public $membership;

        function __construct($_first_name,$_last_name,$_membership){
            $this->first_name = $_first_name;
            $this->last_name = $_last_name;
            $this->membership = $_membership;
        }
    }
?>