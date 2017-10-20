<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\AsignacionSprint */

$this->title = $model->id_sprint;
$this->params['breadcrumbs'][] = ['label' => 'Asignacion Sprints', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asignacion-sprint-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_sprint' => $model->id_sprint, 'id_historia' => $model->id_historia], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_sprint' => $model->id_sprint, 'id_historia' => $model->id_historia], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_sprint',
            'id_historia',
            'responsable',
        ],
    ]) ?>

</div>
