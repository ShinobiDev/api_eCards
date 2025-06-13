<?php

namespace App\DTOs\Role;

class RoleDTO
{
    public $id;
    public $name;

    public function __construct($id = null, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }
}
