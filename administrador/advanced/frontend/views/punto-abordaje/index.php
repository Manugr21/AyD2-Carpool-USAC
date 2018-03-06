<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PUNTOABORDAJESearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Puntos de abordaje';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntoabordaje-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear punto de abordaje', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'LUGAR',
            'DESCRIPCION',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
