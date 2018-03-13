<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PUNTOSVIAJE */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Asignacion de punto de abordaje', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntosviaje-view">

<!--
    <h1><?= Html::encode($this->title) ?></h1>
--->
    <p>
        <?= Html::a('Actualizar', ['update', 'ID' => $model->ID, 'VIAJE_ID' => $model->VIAJE_ID, 'PUNTO_ABORDAJE_ID' => $model->PUNTO_ABORDAJE_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'ID' => $model->ID, 'VIAJE_ID' => $model->VIAJE_ID, 'PUNTO_ABORDAJE_ID' => $model->PUNTO_ABORDAJE_ID], [
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
            'HORA',
            'VIAJE_ID',
            'PUNTO_ABORDAJE_ID',
        ],
    ]) ?>

</div>
