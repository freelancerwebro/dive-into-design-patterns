<?php
require "vendor/autoload.php";

use DP\Structural\Proxy\ProxyImage;

$image = new ProxyImage("picture_from_LA_2020_02_15.jpg");

// image will be loaded from disk
$image->display();

// image will not be loaded from disk again
$image->display();