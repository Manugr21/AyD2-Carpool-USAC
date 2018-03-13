<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\VIAJE */

$this->title = 'Viaje #' . $model->ID ;
$this->params['breadcrumbs'][] = ['label' => 'Viajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->ID ;
?>
<div class="viaje-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'ID' => $model->ID, 'CANTIDAD_PASAJEROS' => $model->CANTIDAD_PASAJEROS, 'ESTADO_VIAJE_ID' => $model->ESTADO_VIAJE_ID, 'USUARIO_ID' => $model->USUARIO_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'ID' => $model->ID, 'CANTIDAD_PASAJEROS' => $model->CANTIDAD_PASAJEROS, 'ESTADO_VIAJE_ID' => $model->ESTADO_VIAJE_ID, 'USUARIO_ID' => $model->USUARIO_ID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID',
            'FECHA_HORA',
            'CANTIDAD_PASAJEROS',
            'eSTADOVIAJE.ESTADO',
            'uSUARIO.NOMBRE',
            'uSUARIO.APELLIDO',
        ],
    ]) ?>

</div>
