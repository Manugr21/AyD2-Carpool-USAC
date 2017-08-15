<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\SprintBacklogSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sprint-backlog-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_sprint') ?>

    <?= $form->field($model, 'velocidad') ?>

    <?= $form->field($model, 'fh_inicio') ?>

    <?= $form->field($model, 'fh_fin') ?>

    <?= $form->field($model, 'fh_creacion') ?>

    <?php // echo $form->field($model, 'definicion_hecho') ?>

    <?php // echo $form->field($model, 'nota') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
