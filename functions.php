<?php

// My SQL Connection //
require('database/DBController.php');

// Product Class //
require('database/Product.php');

// Cart Class //
require('database/Cart.php');

// DBController object
$db = new DBController();

//Product object
$product = new Product($db);
$product_shuffle = $product->getData();

//Cart object
$Cart = new Cart($db);
