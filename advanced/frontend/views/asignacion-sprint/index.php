<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AsignacionSprintSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asignacion Sprints';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asignacion-sprint-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asignacion Sprint', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_sprint',
            'id_historia',
            'responsable',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
