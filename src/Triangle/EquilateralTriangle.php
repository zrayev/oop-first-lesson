<?php

namespace Triangle;

final class EquilateralTriangle extends AbstractTriangle
{
  /**
   * EquilateralTriangle constructor.
   * @param int $lengthA
   * @param int $lengthB
   * @param int $lengthC
   */
  public function __construct($lengthA = 6, $lengthB = 6, $lengthC = 6)
  {
    $this->lengthA = $lengthA;
    $this->lengthB = $lengthB;
    $this->lengthC = $lengthC;
  }
  
  /**
   * @return int
   */
  protected function countArea()
  {
    $area = $this->lengthA * $this->lengthA * (sqrt(3) / 4);

    return $area;
  }

  /**
   * @return int
   */
  protected function countPerimeter()
  {
    $perimeter = 3 * $this->lengthA;

    return $perimeter;
  }

  /**
   * @return string
   */
  public function printScreen()
  {
    $str = 'a: ' . $this->lengthA . "<br>\n";
    $str .= 'b: ' . $this->lengthB . "<br>\n";
    $str .= 'c: ' . $this->lengthC . "<br>\n";
    $str .= 'area: ' . $this->countArea() . "<br>\n";
    $str .= 'perimeter: ' . $this->countPerimeter() . "<br>\n";

    return $str;
  }
}
