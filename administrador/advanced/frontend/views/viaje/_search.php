<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VIAJESearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="viaje-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'FECHA_HORA') ?>

    <?= $form->field($model, 'CANTIDAD_PASAJEROS') ?>

    <?= $form->field($model, 'ESTADO_VIAJE_ID') ?>

    <?= $form->field($model, 'USUARIO_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
