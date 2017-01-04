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
        //'brandLabel' => 'PUCESE',
        //'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        //['label' => 'Home', 'url' => ['/site/index']],
        //['label' => 'About', 'url' => ['/site/about']],


    ];
   // iconos YII2 https://github.com/yiisoft/yii2/issues/5207

   $menuItemsIconBegin  [] = ['label' => '<span style="font-size:1.3em;" class="glyphicon glyphicon-home"></span>'.Html::encode('PUCESE'),'url' => ['/site/index'], ];

   $menuItemsIcons  [] = ['label' => '<span class="glyphicon glyphicon-home"></span>'.Html::encode('Home'),'url' => ['/site/index'], ];
   $menuItemsIcons  [] = ['label' => '<span class="glyphicon glyphicon-pushpin"></span>'.Html::encode('Contacto'),'url' => ['/site/contact'], ];

    if (Yii::$app->user->isGuest) {

      $menuItemsIcons  [] = ['label' => '<span class="glyphicon glyphicon-plus-sign"></span>'.Html::encode('Signup'),'url' => ['/site/signup'], ];
      $menuItemsIcons  [] = ['label' => '<span class="glyphicon glyphicon-user"></span>'.Html::encode('Login'),'url' => ['/site/login'], ];


    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (<a class="text-capitalize">'. Yii::$app->user->identity->username . '</a>)',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';

            $menuItemsIcons  [] = ['label' => '<span class="glyphicon glyphicon-glass"></span>'.Html::encode('Bebidas'),'url' => ['/site/consumo'], ];

    }


    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => $menuItemsIcons,
    ]);

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'encodeLabels' => false,
        'items' => $menuItemsIconBegin,
    ]);


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
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
