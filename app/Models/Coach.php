<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function schedules()
    {
        return $this->hasMany(Schedule::class);
    }
}
