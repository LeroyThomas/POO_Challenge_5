<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane = 1;

    /**
     * @var int
     */
    protected $maxSpeed = 10;

    final public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    final public function addVehicle(Vehicle $vehicle): void
    {
        if($vehicle instanceof Bicycle || $vehicle instanceof Skate) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}

