<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscuelasArbitros extends Model
{
    use HasFactory;
    protected $table = 'escuelas_arbitros';

    protected $fillable = [
        'escuela_id',
        'user_id',
    ];
       public function escuela()
    {
        return $this->belongsTo(Escuela::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
