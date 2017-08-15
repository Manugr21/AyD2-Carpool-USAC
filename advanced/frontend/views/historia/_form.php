<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Historia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_proyecto')->textInput() ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput() ?>

    <?= $form->field($model, 'fh_creacion')->textInput() ?>

    <?= $form->field($model, 'prioridad')->textInput() ?>

    <?= $form->field($model, 'dificultad')->textInput() ?>

    <?= $form->field($model, 'avance')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
