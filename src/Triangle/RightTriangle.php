<?php

namespace Triangle;

final class RightTriangle extends AbstractTriangle
{
  /**
   * @param $lengthA
   * @param $lengthB
   * @return float
   */
  protected function countArea($lengthA, $lengthB)
  {
    $area = $lengthA*$lengthB/2;

    return $area;
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
    $str .= 'perimeter: ' . $this->countPerimeter($this->lengthA, $this->lengthB, $this->lengthC) . "<br>\n";

    return $str;
  }
}
