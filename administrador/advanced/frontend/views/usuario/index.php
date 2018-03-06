<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\USUARIOSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lista de usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear usuario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'ID',
            'CUI',
            'REGISTRO',
            'NOMBRE',
            'APELLIDO',
            'tIPOUSUARIO.TIPO',
            // 'PASSWORD',
            // 'TIPO_USUARIO_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
