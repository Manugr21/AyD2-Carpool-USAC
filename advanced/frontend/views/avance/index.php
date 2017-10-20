<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AvanceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Avance';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="historia-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--p>
        <?= Html::a('Create Historia', ['create'], ['class' => 'btn btn-success']) ?>
    </p-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_historia',
            'id_proyecto',
            'nombre',
            'descripcion',
            'fh_creacion',
            // 'prioridad',
            // 'dificultad',
             'avance',
             'fh_fin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>