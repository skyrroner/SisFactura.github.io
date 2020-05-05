<?php

namespace App\Http\Requests;

use App\Prueba\Orden;
use Illuminate\Foundation\Http\FormRequest;

class OrdenEliminarRequest extends FormRequest
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
         * encontra la orden a eliminar
         */
        $ordenxxx = Orden::find(
            //    0       1  2
            $this->segments()[2] // obtener el id de la orden en la url: http://dav.test/ordenes/eliminar/1
        );
        /**
         * verificar que la orden tenga productos asignados
         */
        $contador=isset($ordenxxx->productos)?
        count($ordenxxx->productos):0;

        // si la orden tiene productos se lanza el mensaje
        if ($contador>0) {
            /**
             * Mensaje que aparecera en en la vista para indicar que ya tiene asignacion
             */
            $this->_mensaje = [
                'eliminar.required' => 'La orden no se puede eliminar, ya tiene productos asignados',
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
