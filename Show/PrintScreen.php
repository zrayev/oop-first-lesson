<?php

namespace Show;

use Triangle\EquilateralTriangle;
use Triangle\IsoscelesTriangle;
use Triangle\ScaleneTriangle;
use Triangle\RightTriangle;

class PrintScreen
{
  function displayScreen(EquilateralTriangle $triangle)
  {
    $str = $triangle->getName() . "<br>\n";
    $str .= 'a: ' . $triangle->getLengthA() . "<br>\n";
    $str .= 'b: ' . $triangle->getLengthB() . "<br>\n";
    $str .= 'c: ' . $triangle->getLengthC() . "<br>\n";
    $str .= 'area: ' . $triangle->countArea() . "<br>\n";
    $str .= 'perimeter: ' . $triangle->countPerimeter() . "<br>\n";

    echo $str;
  }
}