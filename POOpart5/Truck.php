<?php
require_once 'Vehicle.php';


class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    /**
     * @var integer
     */
    private $stockCapacity;

    /**
     * @var integer
     */
    private $stock = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->stockCapacity = $stockCapacity;

    }
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function fuelLevel(): string
    {
        if ($this->stock < $this->stockCapacity) {
            return "filling";
        }else{
            return "full";
        }

    }

    public function getStock()
    {
        return $this->stock;
    }
    public function setStock(int $stock): void
    {
        $this->stock = $stock;
    }

    public function getStockCapacity()
    {
        return $this->stockCapacity;
    }
    public function setStockCapacity(int $stockCapacity): void
    {
        $this->stock = $stockCapacity;
    }
}
