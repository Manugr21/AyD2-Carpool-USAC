<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PUNTOABORDAJE */

$this->title = $model->LUGAR;
$this->params['breadcrumbs'][] = ['label' => 'Puntos de abordaje', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntoabordaje-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->ID], [
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
            'LUGAR',
            'DESCRIPCION',
        ],
    ]) ?>

</div>
