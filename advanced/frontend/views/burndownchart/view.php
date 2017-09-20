<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\SprintBacklog */

$this->title = $model->id_sprint;
$this->params['breadcrumbs'][] = ['label' => 'Burndownchart ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sprint-backlog-view">

    <h1> Sprint: <?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [/*
            'id_sprint',
            'velocidad',
            'fh_inicio',
            'fh_fin',
            'fh_creacion',
            'definicion_hecho:ntext',
            'nota:ntext',*/
        ],
    ]) ?>

</div>


<script src="../code/highcharts.js"></script>
<script src="../code/modules/exporting.js"></script>

<div id="container"></div>



<script src="../code/themes/dark-unica.js"></script>
				<script>


Highcharts.chart('container', {

    title: {
        text: 'Burndownchart'
    },

    subtitle: {
        text:
        '<?php
        echo 'Sprint '. $this->title ;
        ?>'
    },

    yAxis: {
        title: {
            text: 'Puntos'
        }
    },
    xAxis: {
       type: 'datetime'
   },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
      series: {
          pointStart: Date.UTC('<?php
                                $date = date_create($model->fh_inicio ) ;
                                echo date_format($date, 'Y');
                                ?>',

                                '<?php
                                $date = date_create($model->fh_inicio ) ;
                                echo (date_format($date, 'm') -1);
                                ?>'
                                , '<?php
                                $date = date_create($model->fh_inicio ) ;
                                echo (date_format($date, 'd') -1);
                                ?>'
                              ),


          pointIntervalUnit: 'day'
      }
    },

    series: [{
        name: 'Target',
        data:[
        <?php
        $fecha1 = $model->fh_inicio;
        $fecha2 = $model->fh_fin;
        $duracion =0;
        for($i=$fecha1;$i<=$fecha2;$i = date("Y-m-d", strtotime($i ."+ 1 days"))){
          $duracion = $duracion +1;
        }

       $cont = $model->velocidad;
       echo $cont .',';
       $cont = $cont - $model->velocidad / $duracion;

       for($i=$fecha1;$i<=$fecha2;$i = date("Y-m-d", strtotime($i ."+ 1 days"))){

       ?>
        [<?php echo round($cont,2); ?>],

        <?php
        $cont = $cont - $model->velocidad / $duracion;
        } ?>

]

    },
    /*{
        name: 'Actual',
        data: [2, 2, 7, 5, 9, 0, 12, 4]
    }*/]

	});
				</script>
