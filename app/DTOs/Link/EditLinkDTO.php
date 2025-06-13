<?php

namespace App\DTOs;

class LinkDTO
{
    public ?int $id;
    public ?string $link;
    public ?int $user_id;
    public ?int $status_id;

    public function __construct(
        ?int $id = null,
        ?string $link = null,
        ?int $user_id = null,
        ?int $status_id = null
    ) {
        $this->id = $id;
        $this->link = $link;
        $this->user_id = $user_id;
        $this->status_id = $status_id;
    }
}