<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\VIAJE */

$this->title = 'Actualizar viaje';
$this->params['breadcrumbs'][] = ['label' => 'Viajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID, 'CANTIDAD_PASAJEROS' => $model->CANTIDAD_PASAJEROS,'ESTADO_VIAJE_ID' => $model->ESTADO_VIAJE_ID, 'USUARIO_ID' => $model->USUARIO_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="viaje-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
