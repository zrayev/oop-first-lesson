<?php
require_once 'vendor/autoload.php';

use Show\PrintScreen;
use Triangle\EquilateralTriangle;
use Triangle\IsoscelesTriangle;
use Triangle\ScaleneTriangle;
use Triangle\RightTriangle;

$show = new PrintScreen();
$triangle = new EquilateralTriangle();

$show->displayScreen($triangle);

echo "<br>";
$isosceles = new IsoscelesTriangle();
echo $isosceles->printScreen() . "<br>\n";

$scalene = new ScaleneTriangle();
echo $scalene->printScreen() . "<br>\n";

$right = new RightTriangle();
echo $right->printScreen() . "<br>\n";