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
   * @var string
   */
  protected $name;

  abstract function __construct();

  abstract public function countArea();

  abstract public function countPerimeter();

  abstract public function printScreen();
  
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
  public function getName()
  {
    return $this->name;
  }

  /**
   * @param string $name
   */
  public function setName($name)
  {
    $this->name = $name;
  }

}
