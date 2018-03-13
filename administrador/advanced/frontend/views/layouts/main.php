<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Carpool USAC',
        'brandUrl' => ['/site/index'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);


    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
      $menuItems = [
          //['label' => 'Dashboard', 'url' => ['/site/index']],
          ['label' => 'Usuarios', 'url' => ['/usuario/index'],
           'items' => [
             ['label' => 'Lista', 'url' => ['/usuario/index']],
             ['label' => 'Crear', 'url' => ['/usuario/create']],
           ]
          ],
          ['label' => 'Puntos de abordaje', 'url' => ['/punto-abordaje/index'],
           'items' => [
             ['label' => 'Lista', 'url' => ['/punto-abordaje/index']],
             ['label' => 'Crear', 'url' => ['/punto-abordaje/create']],
           ]
          ],
          ['label' => 'Viajes', 'url' => ['/viaje/index'],
           'items' => [
             ['label' => 'Lista', 'url' => ['/viaje/index']],
             ['label' => 'Crear', 'url' => ['/viaje/create']],
           ]
          ],
          ['label' => 'Asignación de puntos de abordaje', 'url' => ['/puntos-viaje/index'],
           'items' => [
             ['label' => 'Lista', 'url' => ['/puntos-viaje/index']],
             ['label' => 'Asignar', 'url' => ['/puntos-viaje/create']],
           ]
          ],
          /*['label' => 'Sprint Backlog', 'url' => ['/sprint-backlog/index'],
           'items' => [
             ['label' => 'Lista', 'url' => ['/sprint-backlog/index']],
             ['label' => 'Crear', 'url' => ['/sprint-backlog/create']],
             ['label' => 'Asignar historias de usuario', 'url' => ['/asignacion-sprint/index']],
           ]
         ],
         ['label' => 'Control de avance', 'url' => ['#'],
          'items' => [
            ['label' => 'Ingresar control de avance', 'url' => ['/avance/index']],
            ['label' => 'Burndown chart', 'url' => ['/burndownchart/index']],
          ]
        ],
        */
      ];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Carpool USAC <?= date('Y') ?></p>
<!--
        <p class="pull-right"><?= Yii::powered() ?></p>
      -->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
