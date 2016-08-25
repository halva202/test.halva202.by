<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Test';
$this->params['breadcrumbs'][] = $this->title;
?>
<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is a test page.</p> 
	<p>If all right, the letter was sent to the box (es) specified in /common/models/swiftmailer.php parameter $mailer->setTo.</p>
	<p>p.s. Don't forget correct settings in /common/config/main-local.php</p>
	
</div>
