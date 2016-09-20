<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
	
	<p> Please use network to signup</p>
	
	<script src="//ulogin.ru/js/ulogin.js"></script>
	<div id="uLogin" data-ulogin="display=small;theme=classic;fields=first_name,last_name;providers=facebook,vkontakte,odnoklassniki,twitter,googleplus,google,yandex,instagram,linkedin;hidden=other;redirect_uri=http%3A%2F%2Ftest.halva202.by.gh%2Fsite%2Fsignupthrunetwork;mobilebuttons=0;"></div>
	
	<p> <br><br>or<br><br> </p>

    <p>fill out the following fields:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
