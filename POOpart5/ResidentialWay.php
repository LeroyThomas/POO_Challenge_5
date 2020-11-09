<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    /**
     * @var int
     */
    protected $nbLane = 2;

    /**
     * @var int
     */
    protected $maxSpeed = 50;

    final public function __construct(array $currentVehicles, int $nbLane, int $maxSpeed)
    {
        parent::__construct($currentVehicles, $nbLane, $maxSpeed);
    }

    final public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;

        }
    }

}