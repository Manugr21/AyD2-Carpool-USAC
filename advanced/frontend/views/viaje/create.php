<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\VIAJE */

$this->title = 'Crear viaje';
$this->params['breadcrumbs'][] = ['label' => 'Viajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viaje-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
