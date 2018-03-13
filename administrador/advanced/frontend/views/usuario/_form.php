<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\TIPOUSUARIO;

/* @var $this yii\web\View */
/* @var $model app\models\USUARIO */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'CUI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'REGISTRO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'APELLIDO')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PASSWORD')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TIPO_USUARIO_ID')->dropDownList(
        ArrayHelper::map(TIPOUSUARIO::find()->all(),'ID','TIPO'),
        ['prompt'=>'Seleccionar tipo de usuario']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
