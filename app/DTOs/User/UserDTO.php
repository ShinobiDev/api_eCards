<?php

namespace App\DTOs\User;

class UserDTO
{
    public $id;
    public $name;
    public $document_type_id;
    public $document;
    public $email;
    public $rol_id;
    public $password; // en crudo; en producción, asegurarte de cifrar
    public $phone;
    public $cel_phone;
    public $birthday;

    public function __construct($id = null, $name, $document_type_id, $document, $email, $rol_id, $password, $phone = null, $cel_phone = null, $birthday = null)
    {
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
