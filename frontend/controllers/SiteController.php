<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;

use app\models\OnePage;
use common\models\language;
use common\models\multiphrasebook;
use common\models\swiftmailer;

use common\models\multiphrasebookForHomePage;

\Yii::$app->session->open();

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
	
	// без этой штуки письма ждут
	public function beforeAction($action) {
		$this->enableCsrfValidation = false;
		return parent::beforeAction($action);
	}

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
		$phrasebook = multiphrasebook::getPhrasebook();
        return $this->render('index',[
			'phrasebook'=>$phrasebook,
		]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting me. I will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
	
	//////////////////////////////////////
	public function actionWebdeveloper()
    {
		// $info = OnePage::oneRecord($controller = 'site', $action = 'webdeveloper');
		$language = language::getLanguage();
		// if($language == 'en'){return $this->render('web-developer-en');}
		// if($language == 'ru'){return $this->render('web-developer-ru');}
		return $this->render('web-developer', ['language'=>$language,]);
    }
	
	public function actionTutor()
    {
		return $this->render('tutor');
    }
	
	public function actionPublic()
    {
		return $this->render('public');
    }
	
	public function actionIndexhtml5upminiport()
    {
		$this->layout="/main-html5up-miniport";
		
		$phrasebookModel = new multiphrasebookForHomePage;
		$phrasebook = $phrasebookModel->getPhrasebook();
		
			return $this->render('index_html5upMiniport', [ 
				'phrasebook' => $phrasebook,
			]);
    }
	
	public function actionEmailajax(){
		
		$phrasebookModel = new multiphrasebookForHomePage;
		$phrasebook = $phrasebookModel->getPhrasebook();
		
		// проверяем валидность данных
		
		$canSend = 'yes'; // default - possibility to send email
		
		if(isset($_POST['name'])){
			$name = htmlspecialchars($_POST['name']);
			if($name==''){$canSend = 'no';}
		}
		else {$canSend = 'no';}
		
		if(isset($_POST['email'])){
			$email = htmlspecialchars($_POST['email']);
			if(!preg_match("/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-.]+$/",$email)){$email='';}
			if($email==''){$canSend = 'no';}
		}
		else {$canSend = 'no';}
		
		if(isset($_POST['subject'])){
			$subject = htmlspecialchars($_POST['subject']);
			if($subject==''){$canSend = 'no';}
		}
		else {$canSend = 'no';}
		
		if(isset($_POST['message'])){
			$message = htmlspecialchars($_POST['message']);
			if($message==''){$canSend = 'no';}
		}
		else {$canSend = 'no';}
		
		if($canSend == 'yes'){
			$modelMail = new swiftmailer();
			$parameters = [
				'name' => $name,
				'email' => $email,
				'subject' => $subject,
				'message' => $message,
			];
			$data=[
				'subject' => 'Письмо с сайта halva202.by (sample html5up-miniport)',
				'templateOfLetter' => 'body-html5up-miniport',
				'parameters' => $parameters,
			];
			$modelMail->letter($data);
			echo $name.', '.$phrasebook['messageAfterSending'];
		}
		else{echo $phrasebook['messageBeforeSending'];}
	}
	
	public function actionVolleyball()
    {
		return $this->render('volleyball');
    }
	
	public function actionDonation()
    {
		return $this->render('donation');
    }
	
	public function actionRbac()
    {
		$group = 'rbac';
		$rule = 'no';
		$rule2 = 'no';
		
		if (!Yii::$app->user->isGuest) {
			$group = Yii::$app->user->identity->group;
			if (\Yii::$app->user->can('createPost')) {
				$rule = 'createPost';
			}
			
			$post = 1;
			if (\Yii::$app->user->can('updatePost', ['post' => $post])) {
				$rule2 = 'update post';
			}
		}
		
		$info = [
			'group' => $group,
			'rule' => $rule,
			'rule2' => $rule2,
		];
		return $this->render('rbac', ['info' => $info]);
    }
}
