<?php

namespace Triangle;

class AbstractTriangle
{
  /**
   * @var string
   */
  private $lengthA;
  /**
   * @var string
   */
  private $lengthB;
  /**
   * @var string
   */
  private $lengthC;

  /**
   * @return string
   */
  public function getLengthA()
  {
    return $this->lengthA;
  }

  /**
   * @param string $lengthA
   */
  public function setLengthA($lengthA)
  {
    $this->lengthA = $lengthA;
  }

  /**
   * @return string
   */
  public function getLengthB()
  {
    return $this->lengthB;
  }

  /**
   * @param string $lengthB
   */
  public function setLengthB($lengthB)
  {
    $this->lengthB = $lengthB;
  }

  /**
   * @return string
   */
  public function getLengthC()
  {
    return $this->lengthC;
  }

  /**
   * @param string $lengthC
   */
  public function setLengthC($lengthC)
  {
    $this->lengthC = $lengthC;
  }

}
