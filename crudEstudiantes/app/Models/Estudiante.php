<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $primaryKey = 'codigo';
    public $incrementing = false;

    protected $fillable = [
        'apellidos', 'nombres', 'edad', 'direccion', 'email', 'fechanacimiento'
    ];
}   