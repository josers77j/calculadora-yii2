<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\FuncionesAritmeticasModel;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $model = new FuncionesAritmeticasModel();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // Capturar los valores del modelo
            $valorA = $model->valor_a;
            $valorB = $model->valor_b;
            $operacion = $model->operacion;

            // Realizar la operación según el valor de 'operacion'
            switch ($operacion) {
                case '+':
                    $total = $valorA + $valorB;
                    $respuesta = "La suma de los valores es: $total";
                    break;
                case '-':
                    $total = $valorA - $valorB;
                    $respuesta = "La resta de los valores es: $total";
                    break;
                case '*':
                    $total = $valorA * $valorB;
                    $respuesta = "La multiplicación de los valores es: $total";
                    break;
                case '/':
                    if ($valorB != 0) {
                        $total = $valorA / $valorB;
                        $respuesta = "La división de los valores es: $total";
                    } else {
                        $respuesta = "Error: División por cero";
                    }
                    break;
                default:
                    $respuesta = "Operación no válida";
            }

            // Renderizar la vista con el resultado
            return $this->render('index', [
                'model' => $model,
                'respuesta' => $respuesta,
            ]);
        }

        // Renderizar el formulario inicial
        return $this->render('index', [
            'model' => $model,
        ]);
    }
}
