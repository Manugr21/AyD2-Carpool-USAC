<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\PUNTOABORDAJE;
use app\models\VIAJE;

/* @var $this yii\web\View */
/* @var $model app\models\PUNTOSVIAJE */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="puntosviaje-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'HORA')->textInput() ?>

    <?= $form->field($model, 'VIAJE_ID')->dropDownList(
	ArrayHelper::map(VIAJE::find()->all(), 'ID', 
		function($model){
			$completo = '';
			$nombre = (new \yii\db\Query())
				->select(['NOMBRE', 'APELLIDO'])
				->from('USUARIO')
				->where(['ID' => $model['ID']])
				->all();
			$completo = $nombre[0]['NOMBRE'] . ' ' . $nombre[0]['APELLIDO'];
			return 'Viaje #' . $model['ID'] . ' - Piloto: ' . $completo;
		}
	),
	['prompt'=>'Seleccionar un viaje']
    ) ?>

    <?= $form->field($model, 'PUNTO_ABORDAJE_ID')->dropDownList(
	ArrayHelper::map(PUNTOABORDAJE::find()->all(), 'ID', 'LUGAR'),
	['prompt'=>'Seleccionar un punto de abordaje']
    ) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Asignar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
