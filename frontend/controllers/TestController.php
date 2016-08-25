<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use common\models\swiftmailer;

class TestController extends Controller
{
	public function actionEmailgmail()
    {
		$modelMail = new swiftmailer();
		$parameters = [
			'parameter1' => 'test-parameter1',
			'parameter2' => 'test-parameter2',
		];
		$data=[
			'subject' => 'This letter has been received in the test mode.',
			'templateOfLetter' => 'test', // /common/mail
			'parameters' => $parameters,
		];
		$modelMail->letter($data);
			
        return $this->render('email-gmail');
    }
	
	public function actionEmailyandex()
    {
		$modelMail = new swiftmailer();
		$parameters = [
			'parameter1' => 'test-parameter1',
			'parameter2' => 'test-parameter2',
		];
		$data=[
			'subject' => 'This letter has been received in the test mode.',
			'templateOfLetter' => 'test', // /common/mail
			'parameters' => $parameters,
		];
		$modelMail->letter($data);
			
        return $this->render('email-yandex');
    }
}
