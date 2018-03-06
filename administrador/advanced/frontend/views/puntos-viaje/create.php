<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PUNTOSVIAJE */

$this->title = 'Create Puntosviaje';
$this->params['breadcrumbs'][] = ['label' => 'Puntosviajes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntosviaje-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
