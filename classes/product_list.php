<?php

class Product {
    public $name;
    public $price;
    public $color;
    public $brand;
    public $size;
    public $discount;

    function __construct($_name, $_price, $_color, $_brand){
        $this->name = $_name;
        $this->price = $_price;
        $this->color = $_color;
        $this->brand = $_brand;
    }
};

?>

