<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function trip()
    {
        return $this->hasMany(Trip::class);
    }
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
}
