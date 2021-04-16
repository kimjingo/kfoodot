<?php
$title = "Natural Products";
$cat_id = "natural";
$string = file_get_contents("products.json");

$products = json_decode($string);

require("header.php");
require("products-detail.php");
require("footer.php");
?>