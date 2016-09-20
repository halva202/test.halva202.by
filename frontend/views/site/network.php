<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Network';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
	
	<h4> Информация, которая становится доступной сайту / приложению после авторизации через социальную сеть. </h4>
	
	<script src="//ulogin.ru/js/ulogin.js"></script>
	<div id="uLogin" data-ulogin="display=small;theme=classic;fields=first_name,last_name;providers=facebook,vkontakte,odnoklassniki,twitter,googleplus,google,yandex,instagram,linkedin;hidden=other;redirect_uri=http%3A%2F%2Ftest.halva202.by.gh%2Fsite%2Fnetwork;mobilebuttons=0;"></div>
	
	<?php if(isset($_POST['token']) and isset($_SERVER['HTTP_HOST'])): ?>
		<?php $s = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']); ?>
		<?php $user = json_decode($s, true); ?>
		<div>
			<br>
			<p> соц. сеть, через которую авторизовался пользователь - <?= $user['network'] ?> </p>
			<p> уникальная строка, определяющая конкретного пользователя соц. сети - <?= $user['identity'] ?> </p>
			<p> имя пользователя - <?= $user['first_name'] ?> </p>
			<p> фамилия пользователя - <?= $user['last_name'] ?> </p>
		</div>
	<?php endif; ?>
	
</div>
