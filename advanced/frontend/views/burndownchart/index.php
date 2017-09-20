<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AvanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Burndown chart';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="sprint-backlog-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


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
            // 'definicion_hecho:ntext',
            // 'nota:ntext',
            ['class' => 'yii\grid\Action2'],
        ]


    ]); ?>


</div>
