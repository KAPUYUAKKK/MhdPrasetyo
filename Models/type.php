<?php

namespace App\Models;

class Type
{
    public $id;
    public $name;
    public $category;

    public function __construct($id, $name, $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->category = $category;
    }

    public function displayType()
    {
        return "Type ID: {$this->id}, Name: {$this->name}, Category: {$this->category}";
    }
}
