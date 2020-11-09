<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bicycle extends Vehicle implements LightableInterface
{
  public function __construct(string $color, int $nbSeats)
  {
      parent::__construct($color, $nbSeats);
  }

  public function switchOn():bool
  {
      if ($this->currentSpeed() > 10){
          return true;
      }else{
          return false;
      }

  }
  public function switchOff(): bool
  {
      return false;
  }
}