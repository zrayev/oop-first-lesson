<?php
require_once 'vendor/autoload.php';

use Triangle\EquilateralTriangle;
use Triangle\IsoscelesTriangle;
use Triangle\ScaleneTriangle;
use Triangle\RightTriangle;

echo 'Equilateral Triangle' . "<br>\n";
$equilateral = new EquilateralTriangle();

echo $equilateral->printScreen() . "<br>\n";

echo 'Isosceles Triangle' . "<br>\n";
$isosceles = new IsoscelesTriangle();

echo $isosceles->printScreen() . "<br>\n";

echo 'Scalene Triangle' . "<br>\n";
$scalene = new ScaleneTriangle();

echo $scalene->printScreen() . "<br>\n";

echo 'Right Triangle' . "<br>\n";
$right = new RightTriangle();

echo $right->printScreen() . "<br>\n";