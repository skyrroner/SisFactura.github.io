<?php

namespace App\Prueba;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'email',
        'valtotal',
        'valimpuesto',
        'valfinal',
    ];

    public function productos()
    {
        $columns=['cantidad','total'];
        return $this->belongsToMany(Producto::class)->withPivot($columns);
    }
    public static function getProductos($dataxxxx)
    {
        $comboxxx = [];
        if ($dataxxxx['cabecera']) {
            if ($dataxxxx['ajaxxxxx']) {
                $comboxxx[] = ['valuexxx' => '', 'optionxx' => 'Seleccione'];
            } else {
                $comboxxx = ['' => 'Seleccione'];
            }
        }
        $activida = Producto::get();
        foreach ($activida as $registro) {
          if ($dataxxxx['ajaxxxxx']) {
            $comboxxx[] = ['valuexxx' => $registro->id, 'optionxx' => $registro->nombre];
          } else {
            $comboxxx[$registro->id] = $registro->nombre;
          }
        }

        return $comboxxx;
    }
}
