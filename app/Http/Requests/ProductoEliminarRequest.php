<?php

namespace App\Http\Requests;

use App\Prueba\producto;
use Illuminate\Foundation\Http\FormRequest;

class ProductoEliminarRequest extends FormRequest
{
    private $_mensaje;
    private $_reglasx;
    public function __construct()
    {

        $this->_mensaje = [];
        $this->_reglasx = [];
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return $this->_mensaje;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        /**
         * encontra la producto a eliminar
         */
        $producto = Producto::find(
            //    0       1  2
            $this->segments()[2] // obtener el id de la producto en la url: http://dav.test/ordenes/eliminar/1
        );
        /**
         * verificar que la producto tenga ordenes asignados
         */
        $contador=isset($producto->ordens)?
        count($producto->ordens):0;

        // si la producto tiene ordenes se lanza el mensaje
        if ($contador>0) {
            /**
             * Mensaje que aparecera en en la vista para indicar que ya tiene asignacion
             */
            $this->_mensaje = [
                'eliminar.required' => 'El producto no se puede eliminar, ya tiene ordenes asignados',
            ];
            /**
             * regla de validacion para indicarle al sistema que ya tiente asignacion
             */
            $this->_reglasx = [
                'eliminar' =>
                [
                    'required', //y todos las validaciones a que haya lugar separadas por coma
                ],
            ];
        }

        return $this->_reglasx;
    }
}
