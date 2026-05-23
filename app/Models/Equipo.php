<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
     protected $table = 'equipos';

    protected $fillable = [
        'nombre',
        'logo',
        'informacion',
        'tecnico',
        'torneo_id',
    ];

    public function torneo()
    {
        return $this->belongsTo(Torneo::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
