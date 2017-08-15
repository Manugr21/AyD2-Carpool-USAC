<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\SprintBacklog */

$this->title = 'Update Sprint Backlog: ' . $model->id_sprint;
$this->params['breadcrumbs'][] = ['label' => 'Sprint Backlogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_sprint, 'url' => ['view', 'id' => $model->id_sprint]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sprint-backlog-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
