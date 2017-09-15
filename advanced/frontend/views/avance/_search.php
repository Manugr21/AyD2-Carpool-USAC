<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AvanceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historia-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_historia') ?>

    <?= $form->field($model, 'id_proyecto') ?>

    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'fh_creacion') ?>

    <?php // echo $form->field($model, 'prioridad') ?>

    <?php // echo $form->field($model, 'dificultad') ?>

    <?php // echo $form->field($model, 'avance') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
