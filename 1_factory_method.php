<?php
require "vendor/autoload.php";

use \DP\Creational\FactoryMethod\Facebook\FacebookPoster;
use \DP\Creational\FactoryMethod\Linkedin\LinkedinPoster;

$facebookPoster = new FacebookPoster("test@test.com", "1234");
$facebookPoster->post("Hello world on Facebook!");

$linkedinPoster = new LinkedinPoster("test@test.com", "1234");
$linkedinPoster->post("Hello world on Linkedin!");