<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aceptacion */

$this->title = $model->id_aceptacion;
$this->params['breadcrumbs'][] = ['label' => 'Aceptacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aceptacion-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_aceptacion], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_aceptacion], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_aceptacion',
            'id_historia',
            'descripcion',
            'hecho',
        ],
    ]) ?>

</div>
