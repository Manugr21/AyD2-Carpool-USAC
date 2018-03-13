<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PUNTOSVIAJE */

$this->title = 'Update Puntosviaje: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Puntosviajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID, 'VIAJE_ID' => $model->VIAJE_ID, 'PUNTO_ABORDAJE_ID' => $model->PUNTO_ABORDAJE_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="puntosviaje-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
