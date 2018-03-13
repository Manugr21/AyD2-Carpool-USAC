<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\USUARIO;;
use app\models\ESTADOVIAJE;
use dosamigos\datepicker\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\VIAJE */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="viaje-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FECHA_HORA')->widget(
    DatePicker::className(), [
        // inline too, not bad
         'inline' => false,
         // modify template for custom rendering
        //'template' => '<div class="well well-sm" style="background-color: #fff; width:250px">{input}</div>',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'yyyy-mm-dd 00:00:00'
        ]
    ]);?>

    <?= $form->field($model, 'CANTIDAD_PASAJEROS')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ESTADO_VIAJE_ID')->dropDownList(
        ArrayHelper::map(ESTADOVIAJE::find()->all(),'ID','ESTADO'),
        ['prompt'=>'Seleccionar estado']
    ) ?>

    <?= $form->field($model, 'USUARIO_ID')->dropDownList(
        ArrayHelper::map(USUARIO::find()->where(['TIPO_USUARIO_ID' => 1])->all(),'ID',
        function($model) {
        return $model['NOMBRE'].' '.$model['APELLIDO'];
        }),
        ['prompt'=>'Seleccionar piloto']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
