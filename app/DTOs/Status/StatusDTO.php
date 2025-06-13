<?php

namespace App\DTOs\Status;

class StatusDTO
{
    public $id;
    public $name;

    public function __construct($id = null, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
