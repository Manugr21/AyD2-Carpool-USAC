<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PUNTOSVIAJE */

$this->title = 'Actualizar asignación';
$this->params['breadcrumbs'][] = ['label' => 'Asignación de puntos de abordaje', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID, 'VIAJE_ID' => $model->VIAJE_ID, 'PUNTO_ABORDAJE_ID' => $model->PUNTO_ABORDAJE_ID]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="puntosviaje-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
