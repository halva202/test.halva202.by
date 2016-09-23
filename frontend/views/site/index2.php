<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'index2';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
	
	<h1><?= Html::encode($this->title) ?></h1>
	
	<?php isset($_GET['message']) ? $message=$_GET['message'] : $message='';?>
	<p><?= $message ?></p>
	
	<?php if(!\Yii::$app->user->isGuest): ?>
		<h4> <a href="/userprofile/view?id=<?= Yii::$app->user->identity->id ?>"> profile (<?= Yii::$app->user->identity->username ?>) </a> </h4>
	<?php endif; ?>
	
</div>
