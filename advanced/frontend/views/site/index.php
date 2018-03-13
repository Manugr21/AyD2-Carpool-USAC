<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

$this->title = 'Index - Carpool USAC';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Viajes del Día</h1>
    </div>

    <div class="body-content">
      <div class="viaje-index">

          <h1><?= Html::encode('Viajes en curso') ?></h1>
          <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
<!--
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
 -->
	<?php
	require "../../../../predis/autoload.php";

        try {
                $redis = new Predis\Client(array(
                   "scheme" => "tcp",
                   "host" => "18.220.146.150",
                   "port" => 6379
                ));

                echo '<table>';
                $data = $redis->lrange("pAbordajeNew", 0, $redis->llen("pAbordajeNew"));
                $color = "";
		foreach ($data as $abordaje) {
                    echo '<tr>';
                    list($id_pAbordaje, $descripcion, $lugar, $hora, $fecha, $estado) = explode(",", $abordaje);
                    list($fecha, $hora) = explode(" ", $fecha);
		    echo "<td width='750px' bgcolor='".$color."'>Lugar: ".$lugar."</td><td width='150px' align='right' bgcolor='".$color."'><input id='btn_pAbordaje_".$id_pAbordaje."' type='button' value='Solicitar' class='btn btn-success'></td></tr>";
		    echo "<tr><td bgcolor='".$color."'>Descripcion: ".$descripcion."</td><td align='right' bgcolor='".$color."'>Hora: ".$hora."</td></tr>";
		    if($color == ""){
 			$color="#f2f2f2";
		    }else{
			$color = "";
		    }
		}
                echo '</table>';

        }
        catch (Exception $e) {
                echo "error";
                die($e->getMessage());
        }

	?>
          <p>por acá me falta meter un par de columnas para saber cuántos asientos hay disponibles en cada carro</p>
      </div>
    </div>
</div>
