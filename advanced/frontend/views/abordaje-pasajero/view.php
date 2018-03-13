<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ABORDAJEPASAJERO */

$this->title = $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Abordajepasajeros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abordajepasajero-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'ID' => $model->ID, 'USUARIO_ID' => $model->USUARIO_ID, 'PUNTOS_VIAJE_ID' => $model->PUNTOS_VIAJE_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'ID' => $model->ID, 'USUARIO_ID' => $model->USUARIO_ID, 'PUNTOS_VIAJE_ID' => $model->PUNTOS_VIAJE_ID], [
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
            'USUARIO_ID',
            'PUNTOS_VIAJE_ID',
        ],
    ]) ?>

</div>
