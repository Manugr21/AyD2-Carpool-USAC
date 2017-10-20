<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datepicker\DatePicker;
use yii\helpers\ArrayHelper;
use frontend\models\Proyecto;

/* @var $this yii\web\View */
/* @var $model frontend\models\Historia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="historia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_proyecto')->dropDownList(
        ArrayHelper::map(Proyecto::find()->all(),'id_proyecto','nombre'),
        ['prompt'=>'Seleccionar proyecto']
    ) ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion')->textInput() ?>

    <?= $form->field($model, 'fh_creacion')->widget(
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

    <?= $form->field($model, 'prioridad')->textInput() ?>

    <?= $form->field($model, 'dificultad')->textInput() ?>

    <!--?= $form->field($model, 'avance')->textInput(['maxlength' => true]) ?-->
    
    <!--Esto es para pasar parametros-->
    <!--?= //Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?-->

    <div class="form-group">
        <?= Html::a('Asignar Historias', ['/aceptacion/index'], ['class'=>'btn btn-primary']) ?>

        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
