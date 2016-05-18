<?php

namespace Triangle;

final class IsoscelesTriangle extends AbstractTriangle
{
  /**
   * IsoscelesTriangle constructor.
   * @param int $lengthA
   * @param int $lengthB
   * @param int $lengthC
   */
  public function __construct($lengthA = 10, $lengthB = 10, $lengthC = 18)
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
    $area = $this->lengthC/2 * sqrt(($this->lengthA+$this->lengthC/2)*($this->lengthA-$this->lengthC/2));

    return $area;
  }

  /**
   * @return int
   */
  protected function countPerimeter()
  {
    $perimeter = 2 * $this->lengthA + $this->lengthC;

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
