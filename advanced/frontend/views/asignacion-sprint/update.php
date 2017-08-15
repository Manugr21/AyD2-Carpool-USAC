<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AsignacionSprint */

$this->title = 'Update Asignacion Sprint: ' . $model->id_sprint;
$this->params['breadcrumbs'][] = ['label' => 'Asignacion Sprints', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sprint, 'url' => ['view', 'id_sprint' => $model->id_sprint, 'id_historia' => $model->id_historia]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asignacion-sprint-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
