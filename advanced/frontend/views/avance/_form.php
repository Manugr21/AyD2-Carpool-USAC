<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
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

    <?= $form->field($model, 'fh_fin')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false,
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd'
        ]
    ]);?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
