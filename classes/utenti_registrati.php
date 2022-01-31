<?php

class Cc {
    private $getCc();
    
    public function getCc($int){
    $this->cc = $int;
    }
}
    
    class Utente extends Cc{
        public $first_name;
        public $last_name;
        public $membership;
        private $cc;
        
        public function __construct($_first_name,$_last_name,$_membership,$_cc){
            $this->first_name = $_first_name;
            $this->last_name = $_last_name;
            $this->membership = $_membership;
            $this->cc = $_cc;
        }
    }

?>
