<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'surname',
        'email',
        'cellphone',
        'city',
        'profession',
        'university',
        'team',
        'position',
        'alias',
        'inscription',
        'status'
    ];
}
