<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\USUARIO */

$this->title = 'Actualizar usuario: ' . $model->NOMBRE . ' ' . $model->APELLIDO;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->NOMBRE . ' ' . $model->APELLIDO, 'url' => ['view', 'ID' => $model->ID, 'TIPO_USUARIO_ID' => $model->TIPO_USUARIO_ID]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
