<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'rbac';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
	
	<p>group - <?= $info['group'] ?></p>
	<p>rule - <?= $info['rule'] ?></p>
	<p>rule2 - <?= $info['rule2'] ?></p>
</div>
