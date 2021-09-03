<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avenger extends Model
{
    use HasFactory;
    protected $fillable = [
            'name',
            'bioma',
            'region',
            'conservation',
            'scientific',
            'family',
            'orden',
            'photograph'
        ];
}
