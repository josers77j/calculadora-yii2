<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Calculadora';
?>

<div class="site-index">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-header bg-light text-center border-bottom">
                    <h2 class="text-muted">Calculadora</h2>
                </div>
                <div class="card-body">
                    <?php $formulario = ActiveForm::begin(); ?>

                    <!-- Campo Valor A -->
                    <?= $formulario->field($model, 'valor_a')->textInput(['placeholder' => 'Ingrese el primer valor'])->label('Valor A') ?>

                    <!-- Campo Valor B -->
                    <?= $formulario->field($model, 'valor_b')->textInput(['placeholder' => 'Ingrese el segundo valor'])->label('Valor B') ?>

                    <!-- Checkboxes para Operaciones -->
                    <div class="form-group">
                        <label class="text-muted">Seleccione una operación:</label>
                        <div class="btn-group-toggle d-flex" data-toggle="buttons">
                            <label class="btn btn-ios flex-fill text-center rounded-left">
                                <input type="radio" name="FuncionesAritmeticasModel[operacion]" value="+" autocomplete="off" required> +
                            </label>
                            <label class="btn btn-ios flex-fill text-center">
                                <input type="radio" name="FuncionesAritmeticasModel[operacion]" value="-" autocomplete="off" required> -
                            </label>
                            <label class="btn btn-ios flex-fill text-center">
                                <input type="radio" name="FuncionesAritmeticasModel[operacion]" value="*" autocomplete="off" required> *
                            </label>
                            <label class="btn btn-ios flex-fill text-center rounded-right">
                                <input type="radio" name="FuncionesAritmeticasModel[operacion]" value="/" autocomplete="off" required> /
                            </label>
                        </div>
                    </div>

                    <!-- Botón de Envío -->
                    <div class="form-group mt-3">
                        <?= Html::submitButton('Calcular', ['class' => 'btn btn-success btn-lg btn-block rounded-pill']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>

                    <!-- Respuesta -->
                    <?php if (isset($respuesta)): ?>
                        <div class="alert alert-success mt-3 text-center">
                            <?= Html::encode($respuesta) ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
