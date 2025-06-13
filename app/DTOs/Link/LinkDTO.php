<?php

namespace App\DTOs\Link;

class LinkDTO
{
    public $id;
    public $link;
    public $user_id;
    public $status_id;

    public function __construct($id = null, $link, $user_id, $status_id)
    {
        $this->id = $id;
        $this->link = $link;
        $this->user_id = $user_id;
        $this->status_id = $status_id;
    }
}
