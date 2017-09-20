<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AceptacionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aceptacion-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_aceptacion') ?>

    <?= $form->field($model, 'id_historia') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'hecho') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
