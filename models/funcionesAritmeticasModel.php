<?php

namespace app\models;

use yii\base\Model;

class FuncionesAritmeticasModel extends Model
{
    public $valor_a;
    public $valor_b;
    public $operacion; // Campo para la operación aritmética

    public function rules()
    {
        return [
            [['valor_a', 'valor_b', 'operacion'], 'required'],
            [['valor_a', 'valor_b'], 'number'],
            ['operacion', 'in', 'range' => ['+', '-', '*', '/']],
        ];
    }
}
