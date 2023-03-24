<?php

require_once __DIR__ . "/../models/Category.php";
require_once __DIR__ . "/../models/ProductBed.php";
require_once __DIR__ . "/../models/ProductFood.php";
require_once __DIR__ . "/../models/ProductToy.php";

$category_dog = new Category("Cane", "fa-solid fa dog");
$category_cat = new Category("Gatto", "fa-solid fa cat");

$products = [

    new ProductBed ("Bed Awesome", 3.15, $category_dog, "KG", 12, "Cotton" ),
    new ProductBed ("Bed Incredible", 3.15, $category_cat, "KG", 8, "Cotton"),

    new ProductFood ("Croccantini Super", 3.15, $category_dog, "G", 800, "Secco"),
    new ProductFood ("Scatolette Mega", 3.15, $category_cat , "G", 300, "Umido"),

    new ProductToy ("Gommoso", 5.50, $category_dog, "Plastica"),
    new ProductToy ("Sonaglietto", 1.20, $category_cat, "Plastica")

];


