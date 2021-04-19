<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    protected $fillable = [
        'anotaciones',
        'total',
        'estatus',
        'idUsuario',
    ];

    public function platillos(){ 
        return $this->belongsToMany(Platillo::class, 'idPlatillo');
    }
}
