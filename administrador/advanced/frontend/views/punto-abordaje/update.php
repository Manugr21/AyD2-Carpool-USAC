<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PUNTOABORDAJE */

$this->title = 'Actualizar punto de abordaje: ' . $model->LUGAR;
$this->params['breadcrumbs'][] = ['label' => 'Puntos de abordaje', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->LUGAR, 'url' => ['view', 'id' => $model->ID]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="puntoabordaje-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
