<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PUNTOSVIAJE */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="puntosviaje-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HORA')->textInput() ?>

    <?= $form->field($model, 'VIAJE_ID')->textInput() ?>

    <?= $form->field($model, 'PUNTO_ABORDAJE_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
