<?php

namespace App\Http\Requests;

use GuzzleHttp\Psr7\Message;
use Illuminate\Foundation\Http\FormRequest;

class RegistroCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'numero_cedula' =>'required|min:5|numeric',
            'nombre_empleado' => 'required|min:3|max:200|string',
            'apellidos_empleado' => 'required|min:3|string',
            'cargo' => 'nullable|min:4|string',
            'fecha_inicio' => 'nullable|min:10|max:11|date',
            'fecha_retiro' => 'nullable|min:10|max:11|date',
            'dias_laborados' => 'nullable|min:1|numeric',
            'sueldo' => 'nullable|numeric',
            'devengado' => 'nullable|numeric',
            'ley100' => 'nullable|numeric',

        ];
    }
    public function messages(){
        return[
            'numero_cedula.required'=>'Este campo es requerido',
            'numero_cedula.numeric'=>'El numero de cédula debe ser un numero',
            'nombre_empleado.required'=>'Este campo es requerido',
            'nombre_empleado.string'=>'el nombre es invalido',
            'apellidos_empleado.required'=>'Este campo es requerido',
            'apellidos_empleado.string'=>'el apellido es invalido',
            'cargo.string'=>'el cargo es invalido',
            'fecha_inicio.date'=>'Formato incorrecto asesegurese de que el dato sea tipo 0000-00-00 para Año-mes-Dia',
            'fecha_retiro.date'=>'Formato incorrecto asesegurese de que el dato sea tipo 0000-00-00 para Año-mes-Dia',
            'dias_laborados.numeric'=>'datos incorrectos dias laborados es numerico y entero',
            'sueldo.numeric'=>'datos incorrectos verifique que sea un campo numerico, entero sin puntos ni comas',
            'devengado.numeric'=>'datos incorrectos verifique que sea un campo numerico, entero sin puntos ni comas',
            'ley1oo.numeric'=>'datos incorrectos verifique que sea un campo numerico, entero sin puntos ni comas',

        ];
    }
}
