<?php

namespace App\DTOs\Ecard;

class ECardDTO
{
    public ?int $id;
    public ?string $serial;
    public ?int $user_id;
    public ?int $status_id;
    public ?string $fecha_activacion;
    public ?string $fecha_desactivacion;

    public function __construct(
        ?int $id = null,
        ?string $serial = null,
        ?int $user_id = null,
        ?int $status_id = null,
        ?string $fecha_activacion = null,
        ?string $fecha_desactivacion = null
    ) {
        $this->id = $id;
        $this->serial = $serial;
        $this->user_id = $user_id;
        $this->status_id = $status_id;
        $this->fecha_activacion = $fecha_activacion;
        $this->fecha_desactivacion = $fecha_desactivacion;
    }
}
