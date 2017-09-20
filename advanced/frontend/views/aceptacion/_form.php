<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Historia;
use frontend\models\EquipoTrabajo;
use frontend\models\SprintBacklog;

/* @var $this yii\web\View */
/* @var $model app\models\Aceptacion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aceptacion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_historia')->dropDownList(
        ArrayHelper::map(Historia::find()->all(),'id_historia','nombre'),
        ['prompt'=>'Seleccionar historia']
    ) ?>

    <?= $form->field($model, 'descripcion')->textInput() ?>

    <?= $form->field($model, 'hecho')->checkbox(['value' => "1"]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
