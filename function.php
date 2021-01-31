<?php
// require my database connection 
require("database/DBController.php");
// require product
require("database/product.php");

// DBcontroller object
$db = new DBController();

// product object
$product = new Product($db);
print_r($product->getData());
