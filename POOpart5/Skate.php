<?php
require_once 'Vehicle.php';

class Skate extends Vehicle
{

public function __construct(string $color, int $nbSeats, int $nbWheel)
    {
    parent::__construct($color, $nbSeats);
    }
}