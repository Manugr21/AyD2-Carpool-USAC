<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Aceptacion */

$this->title = 'Create Aceptacion';
$this->params['breadcrumbs'][] = ['label' => 'Aceptacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aceptacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
