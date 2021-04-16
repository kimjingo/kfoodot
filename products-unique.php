<?php
$title = "Unique Products";
$cat_id = "unique";
$string = file_get_contents("products.json");
// echo $string;
$products = json_decode($string);
// echo $products->natural;
// $cat_id;
// foreach($products->{$cat_id} as $product) echo $product->title;
// var_dump($json_products->natural);
// echo $json_products[$cat_id];
require("header.php");
require("products-detail.php");
require("footer.php");
?>