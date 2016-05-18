<?php

namespace Triangle;

final class RightTriangle extends AbstractTriangle
{
  public function __construct($lengthA = 12, $lengthB = 16, $lengthC = 20)
  {
    $this->lengthA = $lengthA;
    $this->lengthB = $lengthB;
    $this->lengthC = $lengthC;
  }
  
  /**
   * @return float
   */
  protected function countArea()
  {
    $area = $this->lengthA*$this->lengthB/2;

    return $area;
  }

  /**
   * @return int
   */
  protected function countPerimeter()
  {
    $perimeter = $this->lengthA + $this->lengthB + $this->lengthC;

    return $perimeter;
  }
  
  /**
   * @return string
   */
  public function printScreen()
  {
    $str = 'a: ' . $this->getLengthA() . "<br>\n";
    $str .= 'b: ' . $this->getLengthB() . "<br>\n";
    $str .= 'c: ' . $this->getLengthC() . "<br>\n";
    $str .= 'area: ' . $this->countArea() . "<br>\n";
    $str .= 'perimeter: ' . $this->countPerimeter() . "<br>\n";

    return $str;
  }
}
