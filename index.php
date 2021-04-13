<?php
if (file_exists(__DIR__.'/comingsoon.php')) {
    require __DIR__.'/comingsoon.php';
}

$title = "Home";

require("header.php");
require("home.php");
require("footer.php");
?>