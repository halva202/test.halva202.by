<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Тест';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Это тестовая страница.</p> 
	<p>Если все хорошо, только что было послано письмо на ящик(-и), указанный(-ые) в /common/models/swiftmailer.php в параметре $mailer->setTo.</p>
	<p>p.s.Не забудь подкорректировать настройки в /common/config/main-local.php</p>
</div>
