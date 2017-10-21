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
        'brandLabel' => 'Scrum Manager',
        'brandUrl' => ['/site/index'],
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Dashboard', 'url' => ['/site/index']],
        ['label' => 'Proyectos', 'url' => ['/proyecto/index'],
         'items' => [
           ['label' => 'Lista', 'url' => ['/proyecto/index']],
           ['label' => 'Crear', 'url' => ['/proyecto/create']],
           ['label' => 'Backlog', 'url' => ['/historia/index']],
           ['label' => 'Criterios de Aceptación', 'url' => ['/aceptacion/index']],
         ]
        ],
        ['label' => 'Sprint Backlog', 'url' => ['/sprint-backlog/index'],
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
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
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
        <p class="pull-left">&copy; Scrum Manager <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
