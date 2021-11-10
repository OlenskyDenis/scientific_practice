<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

    public function gym()
    {
        return $this->belongsTo(Gym::class);
    }

    public function training_program()
    {
        return $this->belongsTo(TrainingProgram::class);
    }
}
