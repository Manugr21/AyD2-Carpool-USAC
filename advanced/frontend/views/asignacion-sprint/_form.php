<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Historia;
use frontend\models\EquipoTrabajo;
use frontend\models\SprintBacklog;

/* @var $this yii\web\View */
/* @var $model frontend\models\AsignacionSprint */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="asignacion-sprint-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_sprint')->dropDownList(
        ArrayHelper::map(SprintBacklog::find()->all(),'id_sprint','id_sprint','fh_inicio'),
        ['prompt'=>'Seleccionar sprint']
    ) ?>

    <?= $form->field($model, 'id_historia')->dropDownList(
        ArrayHelper::map(Historia::find()->all(),'id_historia','nombre'),
        ['prompt'=>'Seleccionar historia']
    ) ?>

    <?= $form->field($model, 'responsable')->dropDownList(
        ArrayHelper::map(EquipoTrabajo::find()->all(),'username','username'),
        ['prompt'=>'Seleccionar responsable']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
