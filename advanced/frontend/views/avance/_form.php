<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Historia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historia-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--?= $form->field($model, 'id_proyecto')->textInput(['readonly' => true]) ?-->

    <?= $form->field($model, 'nombre')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'fh_creacion')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'prioridad')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'dificultad')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'avance')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
