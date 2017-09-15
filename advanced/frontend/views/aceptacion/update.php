<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aceptacion */

$this->title = 'Update Aceptacion: ' . $model->id_aceptacion;
$this->params['breadcrumbs'][] = ['label' => 'Aceptacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_aceptacion, 'url' => ['view', 'id' => $model->id_aceptacion]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aceptacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
