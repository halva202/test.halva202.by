<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=yii2advanced',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ],
		'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
			'viewPath' => '@common/mail',
			'transport' => [
				'class' => 'Swift_SmtpTransport',
				
				// gmail (https://www.google.com/settings/security/lesssecureapps)
				'host' => 'smtp.gmail.com',
				'username' => 'share.halva202@gmail.com',
				'password' => 'share123',
				'port' => '587',
				'encryption' => 'tls',
				
				// yandex
				/* 'host' => 'smtp.yandex.ru',
				'username' => 'share.halva202@yandex.ru',
				'password' => 'share123',
				'port' => '465',
				'encryption' => 'ssl', */
			],
        ],
    ],
];
