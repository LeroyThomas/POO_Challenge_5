<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var string
     */
    private $energy;
    /**
     * @var integer
     */
    private $energyLevel;

    /**
     * @var bool
     */
    private $hasParkBrake;

    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     * @param bool $hasParkBrake
     */

    public function __construct(string $color, int $nbSeats, string $energy, bool $hasParkBrake)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setParkBrake($hasParkBrake);
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    /**
     * @param bool $hasParkBrake
     */
    public function setParkBrake(bool $hasParkBrake)
    {
        $this->hasParkBrake = $hasParkBrake;
    }

    public function start(): string
    {
        if($this->hasParkBrake == true) {
            throw new Exception("frein a main actif");
        }
        return "Start !!";
    }


    public function getEnergy()
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel( int $energyLevel) : void
    {
        $this->energyLevel = $energyLevel;
    }
}