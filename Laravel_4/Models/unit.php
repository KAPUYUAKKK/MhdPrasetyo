<?php

namespace App\Models;

class Unit
{
    public $id;
    public $name;
    public $description;

    public function __construct($id, $name, $description = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }

    public function displayUnit()
    {
        return "Unit ID: {$this->id}, Name: {$this->name}, Description: {$this->description}";
    }
}
