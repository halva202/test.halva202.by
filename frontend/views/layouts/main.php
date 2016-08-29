<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

use common\models\multiphrasebook;
$phrasebook = multiphrasebook::getPhrasebook();

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
        'brandLabel' => 'Halva202',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => $phrasebook['home'], 'url' => ['/site/index']],
        ['label' => $phrasebook['createSites'], 'url' => ['/site/webdeveloper']],
		/* ['label' => 'test', 'url' => 'https://jobs.tut.by', 'items' => [
            ['label' => 'email', 'url' => 'https://jobs.tut.by', 'items' => [
				['label' => 'gmail', 'url' => ['/test/emailgmail']],
				['label' => 'yandex (require settings)', 'url' => ['/test/emailyandex']],
			]],
        ]],
        ['label' => 'About', 'url' => ['/site/about']], */
        ['label' => $phrasebook['contact'], 'url' => ['/site/contact']],
    ];
    /* if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    } */
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
		<p class="pull-left">
			+375 25 6268071<br>
			halva202@gmail.com
		</p>

        <p class="pull-right">
			&copy; Halva202 <?= date('Y') ?>
			<br>
			<span class="badge"><a href="/set/language?language=ru">RU</a></span>
			<span class="badge"><a href="/set/language?language=en">EN</a></span>
		</p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
