<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

$this->title = 'Dashboard - Scrum Manager';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Dashboard</h1>
    </div>

    <div class="body-content">

      <div class="sprint-backlog-index">
          <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


          <?= GridView::widget([
              'dataProvider' => $dataProvider,
              //'filterModel' => $searchModel,
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

    </div>
</div>
