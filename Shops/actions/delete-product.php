<?php 

include '../classes/Products.php';

$product = new Product;
$product->delete($_POST);