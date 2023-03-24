<?php

require_once __DIR__ . "/Product.php"

class ProductBed extends Product {
    public $weight_unit;
    public $weight;
    public $type;
    
    public function __construct(

        string $name,
        float $price,
        Category $category,
        $weight_unit,
        $weight,
        $type
    )
    {
        parent::__construct($name, $price, $category);

        $weight_unit = $weight_unit;
        $weight = $weight;
        $type = $type;
    }
}