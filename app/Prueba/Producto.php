<?php

namespace App\Prueba;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $fillable = [
        'nombre',
        'descrip',
        'valor',
    ];

    public function ordens()
    {
        return $this->belongsToMany(Orden::class);
    }
}
