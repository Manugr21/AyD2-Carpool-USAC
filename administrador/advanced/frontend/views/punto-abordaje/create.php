<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PUNTOABORDAJE */

$this->title = 'Crear punto de abordaje';
$this->params['breadcrumbs'][] = ['label' => 'Puntos de abordaje', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntoabordaje-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
