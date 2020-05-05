<?php

namespace App\Prueba;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'datos', 'url', 'metodo', 'ip', 'user_id'
    ];
}
