<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\AceptacionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Criterios de Aceptacion';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aceptacion-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Aceptacion', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_aceptacion',
            'id_historia',
            'descripcion',
            'hecho',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
