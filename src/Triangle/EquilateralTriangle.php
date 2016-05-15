<?php

namespace Triangle;

final class EquilateralTriangle extends AbstractTriangle
{
  /**
   * @param $lengthA
   * @param $lengthB
   * @param $lengthC
   * @return float
   */
  protected function countArea($lengthA, $lengthB, $lengthC)
  {
    $area = $lengthA * $lengthA * (sqrt(3) / 4);

    return $area;
  }

  /**
   * @param $lengthA
   * @return int
   */
  protected function countPerimeter($lengthA)
  {
    $perimeter = 3 * $lengthA;

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
    $str .= 'area: ' . $this->countArea($this->lengthA, $this->lengthB, $this->lengthC) . "<br>\n";
    $str .= 'perimeter: ' . $this->countPerimeter($this->lengthA) . "<br>\n";

    return $str;
  }
}
