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
  public function __construct($lengthA = 6, $lengthB = 6, $lengthC = 6, $name = "EquilateralTriangle")
  {
    $this->lengthA = $lengthA;
    $this->lengthB = $lengthB;
    $this->lengthC = $lengthC;
    $this->name = $name;
  }
  
  /**
   * @return int
   */
  public function countArea()
  {
    $area = $this->lengthA * $this->lengthA * (sqrt(3) / 4);

    return $area;
  }

  /**
   * @return int
   */
  public function countPerimeter()
  {
    $perimeter = 3 * $this->lengthA;

    return $perimeter;
  }

  /**
   * @return string
   */
  public function printScreen()
  {

  }
}
