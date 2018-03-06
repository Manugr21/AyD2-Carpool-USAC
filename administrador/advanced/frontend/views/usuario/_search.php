<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\USUARIOSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'CUI') ?>

    <?= $form->field($model, 'REGISTRO') ?>

    <?= $form->field($model, 'NOMBRE') ?>

    <?= $form->field($model, 'APELLIDO') ?>

    <?php // echo $form->field($model, 'PASSWORD') ?>

    <?php // echo $form->field($model, 'TIPO_USUARIO_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
