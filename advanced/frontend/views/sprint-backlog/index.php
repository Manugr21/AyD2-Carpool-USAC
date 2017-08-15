<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\SprintBacklogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sprint Backlogs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sprint-backlog-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sprint Backlog', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sprint',
            'velocidad',
            'fh_inicio',
            'fh_fin',
            'fh_creacion',
            // 'definicion_hecho',
            // 'nota',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
