<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PUNTOSVIAJE */

$this->title = 'Asignar';
$this->params['breadcrumbs'][] = ['label' => 'Asignacion de punto de abordaje', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntosviaje-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
