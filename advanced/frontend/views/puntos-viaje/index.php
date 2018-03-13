<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PUNTOSVIAJESearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Asignaciones de puntos de abordaje';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="puntosviaje-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Asignar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'ID',
            'HORA',
            'VIAJE_ID',
	    'vIAJE.uSUARIO.NOMBRE',
	    'vIAJE.uSUARIO.APELLIDO',
           // 'PUNTO_ABORDAJE_ID',
	    'pUNTOABORDAJE.LUGAR',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
