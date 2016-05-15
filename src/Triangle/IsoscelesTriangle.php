<?php

namespace Triangle;

final class IsoscelesTriangle extends AbstractTriangle
{

  public function countPerimeter($lengthA, $lengthB, $lengthC)
  {
    $perimeter = 2 * $lengthA + $lengthC;

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
    $str .= 'perimeter: ' . $this->countPerimeter($this->lengthA, $this->lengthB, $this->lengthC) . "<br>\n";

    return $str;
  }
}
