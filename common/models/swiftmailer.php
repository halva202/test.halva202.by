<?php

namespace common\models;

use Yii;

class swiftmailer
{
	function letter($data){
		
		$mailer = Yii::$app->mailer->compose(
			$data['templateOfLetter'],
			$data['parameters']
		);
		
		$mailer->setTo(['halva202@gmail.com',])
		
		//  Don't forget correct settings in /common/config/main-local.php
		->setFrom('share.halva202@gmail.com')
		// ->setFrom('share.halva202@yandex.ru')
		
		->setSubject($data['subject'])
		;
		
		$mailer->send();
	}
}
