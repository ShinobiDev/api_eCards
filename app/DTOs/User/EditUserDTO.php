<?php

namespace App\DTOs\User;

class UserDTO
{
    public ?int $id;
    public ?string $name;
    public ?int $document_type_id;
    public ?string $document;
    public ?string $email;
    public ?int $rol_id;
    public ?string $password; // en crudo, solo si cambia
    public ?string $phone;
    public ?string $cel_phone;
    public ?string $birthday;

    public function __construct(
        ?int $id = null,
        ?string $name = null,
        ?int $document_type_id = null,
        ?string $document = null,
        ?string $email = null,
        ?int $rol_id = null,
        ?string $password = null,
        ?string $phone = null,
        ?string $cel_phone = null,
        ?string $birthday = null
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->document_type_id = $document_type_id;
        $this->document = $document;
        $this->email = $email;
        $this->rol_id = $rol_id;
        $this->password = $password;
        $this->phone = $phone;
        $this->cel_phone = $cel_phone;
        $this->birthday = $birthday;
    }
}
