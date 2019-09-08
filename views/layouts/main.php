<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
    <section id='klushok-navbar'>
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/img/klushok-logo.png',['alt'=>Yii::$app->name, 'class' => "logo_flag"]),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'id' => 'klushok-navbar'
                //'class' => 'navbar-inverse navbar-fixed-top',
                //'style' => 'background-color:#B41F21',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items' => [
                ['label'=> 'Home', 'url'=>Yii::$app->homeUrl],
                ['label'=> 'Projects', 'url'=>'/site/projects'],
                // ['label'=> 'Home', 'url'=>Yii::$app->homeUrl, 'options' => ['style' => 'background-color: #B41F21;']],
                // ['label'=> 'Projects', 'url'=>'/site/projects','options' => ['style' => 'color: #B41F21;']]
            ],
        ]);
        NavBar::end();
        ?>
    </section>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>

    <div class="not-set">
        <p>Hallo</p>
    </div>
</div>




<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Klushok  <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>
