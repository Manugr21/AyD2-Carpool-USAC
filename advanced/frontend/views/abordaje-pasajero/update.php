<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ABORDAJEPASAJERO */

$this->title = 'Update Abordajepasajero: ' . $model->ID;
$this->params['breadcrumbs'][] = ['label' => 'Abordajepasajeros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID, 'url' => ['view', 'ID' => $model->ID, 'USUARIO_ID' => $model->USUARIO_ID, 'PUNTOS_VIAJE_ID' => $model->PUNTOS_VIAJE_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="abordajepasajero-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
