<?php

class Cc {
    protected $cc;
    public function setCc($int){
    $this->cc = $int;
    }
}

    
    class Utente extends Cc {
        public $first_name;
        public $last_name;
        public $membership;
        public $cc;
        public $products = [];
        
        
        public function __construct($_first_name,$_last_name,$_membership,$_cc){
            $this->first_name = $_first_name;
            $this->last_name = $_last_name;
            $this->membership = $_membership;
            $this->setCc($_cc);
        }
       
        public function addPrudct(Product $prodotto){
            array_push($this->products, $prodotto);
        }
    }




?>
