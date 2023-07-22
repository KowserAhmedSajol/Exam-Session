<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $casts = [
        'practice_days' => 'array', // Cast the practice_days attribute to an array
    ];
}
