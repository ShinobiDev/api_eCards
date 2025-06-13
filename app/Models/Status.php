<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['name'];
    
    public function eCards()
    {
        return $this->hasMany(ECard::class);
    }

    public function links()
    {
        return $this->hasMany(Link::class);
    }
}
