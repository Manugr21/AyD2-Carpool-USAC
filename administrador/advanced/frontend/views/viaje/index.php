<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VIAJESearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Viajes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viaje-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear viaje', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            //'FECHA_HORA',
             [
                'attribute' => 'an_attributeid1',
                'label' => 'Fecha',
                'value' => function($model) {
                  $arreglo = explode(" ", $model->FECHA_HORA);
                  return $arreglo[0] ;
                },
            ],
             [
                'attribute' => 'an_attributeid2',
                'label' => 'Hora',
                'value' => function($model) {
                  $arreglo = explode(" ", $model->FECHA_HORA);
                  return $arreglo[1] ;
                },
            ],
            'CANTIDAD_PASAJEROS',
            'eSTADOVIAJE.ESTADO',
            'uSUARIO.NOMBRE',
            'uSUARIO.APELLIDO',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
