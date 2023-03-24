<?php

require_once __DIR__ . "/Product.php";

class ProductToy extends Product {
    public $material;


    public function __construct(
        string $name,
        float $price,
        Category $category
    )

}