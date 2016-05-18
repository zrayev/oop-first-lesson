<?php

namespace Triangle;

final class ScaleneTriangle extends AbstractTriangle
{
  /**
   * ScaleneTriangle constructor.
   * @param int $lengthA
   * @param int $lengthB
   * @param int $lengthC
   */
  public function __construct($lengthA = 5, $lengthB = 6, $lengthC = 7, $name = "ScaleneTriangle")
  {
    $this->lengthA = $lengthA;
    $this->lengthB = $lengthB;
    $this->lengthC = $lengthC;
    $this->name = $name;
  }
  
  /**
   * @return float
   */
  public function countArea()
  {
    $semiperimeter = ($this->lengthA + $this->lengthB + $this->lengthC) / 2;
    $area = sqrt($semiperimeter * ($semiperimeter - $this->lengthA) * ($semiperimeter - $this->lengthB) * ($semiperimeter - $this->lengthC));

    return $area;
  }

  /**
   * @return int
   */
  public function countPerimeter()
  {
    $perimeter = $this->lengthA + $this->lengthB + $this->lengthC;

    return $perimeter;
  }
  
  /**
   * @return string
   */
  public function printScreen()
  {
    $str = $this->getName() . "<br>\n";
    $str .= 'a: ' . $this->lengthA . "<br>\n";
    $str .= 'b: ' . $this->getLengthB() . "<br>\n";
    $str .= 'c: ' . $this->getLengthC() . "<br>\n";
    $str .= 'area: ' . $this->countArea() . "<br>\n";
    $str .= 'perimeter: ' . $this->countPerimeter() . "<br>\n";

    return $str;
  }
}
