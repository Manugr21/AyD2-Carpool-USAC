<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Historia */

$this->title = 'Update Avance: ' . $model->id_historia;
$this->params['breadcrumbs'][] = ['label' => 'Historias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_historia, 'url' => ['view', 'id' => $model->id_historia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="historia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
