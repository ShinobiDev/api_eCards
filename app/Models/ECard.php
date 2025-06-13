<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ECard extends Model
{
    protected $fillable = ['serial', 'user_id', 'status_id', 'fecha_activacion', 'fecha_desactivacion'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function status()
    {
        return $this->belongsTo(Status::class);
    }
}
