<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ABORDAJEPASAJERO */

$this->title = 'Create Abordajepasajero';
$this->params['breadcrumbs'][] = ['label' => 'Abordajepasajeros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="abordajepasajero-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
