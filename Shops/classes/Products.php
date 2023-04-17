<?php
include 'Database.php';

class Product extends database
{
  //add product section

  public function addProduct($request)
  {

    $product_name = $request['product_name'];
    $price = $request['price'];
    $quantity = $request['quantity'];

    $sql = "INSERT INTO products(
            product_name,
            price,
            quantity
            )
            VALUES(
            '$product_name',
            '$price',
            '$quantity'
            )";

    if ($this->conn->query($sql)) {
      header('location: ../views/dashboard.php');
    } else {
      die('Error creating data ' . $this->conn->error);
    }
  }

  //display all products in dashboard.php

  public function getAllProduct()
  {
    $sql = "SELECT * FROM products";
    if ($result = $this->conn->query($sql)) {
      return $result;
    } else {
      die('Error retrieving the data ' . $this->conn->error);
    }
  }
  //edit product section

  public function getProduct($id)
  {
    $sql = "SELECT * FROM products WHERE id = '$id'";

    if ($result = $this->conn->query($sql)) {
      return $result->fetch_assoc();
    } else {
      die('Error: ' . $this->conn->error);
    }
  }

  public function update($id, $product_name, $price, $quantity)
  {
    $sql = "UPDATE products
            SET product_name = '$product_name',
                price = '$price',
                quantity = '$quantity'
            WHERE id  = '$id'";

    if ($this->conn->query($sql)) {
      header('location: ../views/dashboard.php');
    } else {
      die('Error: updating product ' . $this->conn->error);
    }
  }

  //delete product section

  public function delete()
  {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id ='$id'";

    if ($this->conn->query($sql)) {
      header('location: ../views/dashboard.php');
    } else {
      die("Error: deleting product");
    }
  }

  //buy product section
  public function buyProduct($id, $buy_quantity)
  {
    $sql = "UPDATE products
        quantity = quantity - '$buy_quantity' 
        WHERE id  = '$id'";

    if ($this->conn->query($sql)) {
      header("location: ../views/dashboard.php");
      exit;
    } else {
      die("Error in buying product: " . $this->conn->error);
    }
  }
}
