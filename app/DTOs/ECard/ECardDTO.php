<?php

namespace App\DTOs\ECard;

class ECardDTO
{
    public $id;
    public $serial;
    public $user_id;
    public $status_id;
    public $fecha_activacion;
    public $fecha_desactivacion;

    public function __construct($id = null, $serial, $user_id, $status_id, $fecha_activacion = null, $fecha_desactivacion = null)
    {
        $this->id = $id;
        $this->serial = $serial;
        $this->user_id = $user_id;
        $this->status_id = $status_id;
        $this->fecha_activacion = $fecha_activacion;
        $this->fecha_desactivacion = $fecha_desactivacion;
    }
}
