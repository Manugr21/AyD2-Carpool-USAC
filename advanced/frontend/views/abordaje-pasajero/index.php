<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Abordaje de pasajeros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abordajepasajero-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Asignar abordaje', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            //'USUARIO_ID',
	    [
		'header' => 'No. Viaje',
		'attribute' => 'pUNTOSVIAJE.vIAJE.ID',
	    ],
	    'pUNTOSVIAJE.HORA',
	    [
		'header' => 'Nombre del piloto',
		'attribute' => 'pUNTOSVIAJE.vIAJE.uSUARIO.NOMBRE',
	    ],
	    [
		'header' => 'Apellido del piloto',
		'attribute' => 'pUNTOSVIAJE.vIAJE.uSUARIO.APELLIDO',
	    ],
	    'pUNTOSVIAJE.pUNTOABORDAJE.LUGAR',
	    'uSUARIO.NOMBRE',
	    'uSUARIO.APELLIDO',
            //'PUNTOS_VIAJE_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
