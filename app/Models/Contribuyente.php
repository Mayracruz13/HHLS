<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contribuyente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre', 'apellidos', 'edad', 'telefono', 'correo', 'archivo',
    ];
}
