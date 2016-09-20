<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'soc seti2';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
	
	<?php
                    $s = file_get_contents('http://ulogin.ru/token.php?token=' . $_POST['token'] . '&host=' . $_SERVER['HTTP_HOST']);
                    $user = json_decode($s, true);
                    echo $user['network']; // - соц. сеть, через которую авторизовался пользователь
                    echo $user['identity']; // - уникальная строка определяющая конкретного пользователя соц. сети
                    echo $user['first_name']; // - имя пользователя
                    echo $user['last_name']; // - фамилия пользователя
					
					?>
                
	
</div>
