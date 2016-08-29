<?php
namespace frontend\controllers;

use yii\web\Controller;
use common\models\language;

\Yii::$app->session->open();

class SetController extends Controller
{
	
    public function actionLanguage()
    {
		if(isset($_GET['language'])){
			language::setLanguage($language=$_GET['language']);
		}
		return $this->redirect(\Yii::$app->request->referrer);
	}
	
}
