<?php

namespace Triangle;

abstract class AbstractTriangle
{
  /**
   * @var int
   */
  protected $lengthA;
  /**
   * @var int
   */
  protected $lengthB;
  /**
   * @var int
   */
  protected $lengthC;

  /**
   * @return int
   */
  public function getLengthA()
  {
    return $this->lengthA;
  }

  /**
   * @param int $lengthA
   */
  public function setLengthA($lengthA)
  {
    $this->lengthA = $lengthA;
  }

  /**
   * @return int
   */
  public function getLengthB()
  {
    return $this->lengthB;
  }

  /**
   * @param int $lengthB
   */
  public function setLengthB($lengthB)
  {
    $this->lengthB = $lengthB;
  }

  /**
   * @return int
   */
  public function getLengthC()
  {
    return $this->lengthC;
  }

  /**
   * @param int $lengthC
   */
  public function setLengthC($lengthC)
  {
    $this->lengthC = $lengthC;
  }

  /**
   * @return string
   */
  abstract protected function printScreen();

  /**
   * @param $lengthA
   * @param $lengthB
   * @param $lengthC
   * @return float
   */
  protected function countArea($lengthA, $lengthB, $lengthC)
  {
    $semiperimeter = ($lengthA + $lengthB + $lengthC) / 2;
    $area = sqrt($semiperimeter * ($semiperimeter - $lengthA) * ($semiperimeter - $lengthB) * ($semiperimeter - $lengthC));

    return $area;
  }

  /**
   * @param $lengthA
   * @param $lengthB
   * @param $lengthC
   * @return int
   */
  protected function countPerimeter($lengthA, $lengthB, $lengthC)
  {
    $perimeter = $lengthA + $lengthB + $lengthC;

    return $perimeter;
  }
}
