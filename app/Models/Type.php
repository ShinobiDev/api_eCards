<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable = ['name', 'type_parent_id'];

    public function parent()
    {
        return $this->belongsTo(Type::class, 'type_parent_id');
    }

    public function children()
    {
        return $this->hasMany(Type::class, 'type_parent_id');
    }
}
