<?php

namespace App\Models;

class Car
{
    public $id;
    public $name;
    public $brand;
    public $type;
    public $unit;

    public function __construct($id, $name, $brand, Type $type, Unit $unit)
    {
        $this->id = $id;
        $this->name = $name;
        $this->brand = $brand;
        $this->type = $type;
        $this->unit = $unit;
    }

    public function displayCarDetails()
    {
        return "Car ID: {$this->id}, Name: {$this->name}, Brand: {$this->brand}, " .
               "Type: {$this->type->name}, Unit: {$this->unit->name}";
    }
}
