<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\USUARIO */

$this->title = $model->NOMBRE . ' ' . $model->APELLIDO;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'ID' => $model->ID, 'TIPO_USUARIO_ID' => $model->TIPO_USUARIO_ID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'ID' => $model->ID, 'TIPO_USUARIO_ID' => $model->TIPO_USUARIO_ID], [
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
            'ID',
            'CUI',
            'REGISTRO',
            'NOMBRE',
            'APELLIDO',
            'PASSWORD',
            'tIPOUSUARIO.TIPO',
        ],
    ]) ?>

</div>
