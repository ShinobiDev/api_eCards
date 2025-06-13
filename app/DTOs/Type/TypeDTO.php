<?php

namespace App\DTOs\Type;

class TypeDTO
{
    public $id;
    public $name;
    public $type_parent_id;

    public function __construct($id = null, $name, $type_parent_id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->type_parent_id = $type_parent_id;
    }
}
