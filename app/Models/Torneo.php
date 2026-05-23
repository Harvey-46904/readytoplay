<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    protected $table = 'torneos';

    protected $fillable = [
        'nombre',
        'banner',
        'informacion',
        'categoria',
        'fecha_inicio',
        'organizador',
        'slug'
    ];
}

