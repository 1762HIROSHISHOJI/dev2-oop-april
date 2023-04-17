<?php 

include '../classes/Products.php';

$product = new Product;

if(isset($_POST['btn_update'])){
  
  $id = $GET['id'];
  $product_name = $POST['product_name'];
  $price = $POST['price'];
  $quantity = $POST['quantity'];

  $product->update($id, $product_name, $price, $quantity);

}
