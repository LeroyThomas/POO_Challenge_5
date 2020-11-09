<?php
require_once 'HighWay.php';

final class motorway extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane = 4;

    /**
     * @var int
     */
    protected $maxSpeed = 130;

    final public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    final public function addVehicle(Vehicle $vehicle): void
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}