<?php

require_once __DIR__ . "/Category.php"

class Product {
    public $name;
    protected $price;
    protected $category;
    
    public function __construct( string $name,  float $price, Category $category) 
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function setName($name) {
        if(!is_string($name) || $name === "") return false
        $this->name = $name;
        return $this;
    }

    public function getName() {
        return
    
}

}

$product = new Product ("Palla", 3.15, new Category ("_"));

var_dump($product);

?>
