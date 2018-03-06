<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

$this->title = 'Index - Carpool USAC';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Index pro ftw</h1>
    </div>

    <div class="body-content">
      <div class="viaje-index">

          <h1><?= Html::encode('Viajes en curso') ?></h1>
          <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

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
                  'uSUARIO.NOMBRE',
                  'uSUARIO.APELLIDO',
              ],
          ]); ?>
          <p>por acá me falta meter un par de columnas para saber cuántos asientos hay disponibles en cada carro</p>
      </div>
    </div>
</div>
