<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\SprintBacklog */

$this->title = 'Create Sprint Backlog';
$this->params['breadcrumbs'][] = ['label' => 'Sprint Backlogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sprint-backlog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
