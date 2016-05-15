<?php
require_once 'vendor/autoload.php';

use Triangle\EquilateralTriangle;
use Triangle\IsoscelesTriangle;
use Triangle\ScaleneTriangle;

echo 'EquilateralTriangle' . "<br>\n";
$equilateral = new EquilateralTriangle();
$equilateral ->setLengthA(5);
$equilateral ->setLengthB(5);
$equilateral ->setLengthC(5);

echo $equilateral->printScreen() . "<br>\n";

echo 'IsoscelesTriangle' . "<br>\n";
$isosceles = new IsoscelesTriangle();
$isosceles ->setLengthA(10);
$isosceles ->setLengthB(10);
$isosceles ->setLengthC(18);

echo $isosceles->printScreen() . "<br>\n";

echo 'ScaleneTriangle' . "<br>\n";
$scalene = new ScaleneTriangle();
$scalene ->setLengthA(5);
$scalene ->setLengthB(6);
$scalene ->setLengthC(7);

echo $scalene->printScreen() . "<br>\n";
