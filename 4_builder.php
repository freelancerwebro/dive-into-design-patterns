<?php
require "vendor/autoload.php";

use DP\Creational\Builder\HTMLPageBuilder;
use DP\Creational\Builder\HTMLPageDirector;

$pageBuilder = new HTMLPageBuilder();
$pageDirector = new HTMLPageDirector($pageBuilder);
$pageDirector->buildPage();
$page = $pageDirector->getPage();
echo $page->showPage();