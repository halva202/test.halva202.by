<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form".
 *
 * @property integer $id
 * @property string $title
 */
class Form extends \yii\db\ActiveRecord
{
	public $reCaptcha;
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title'], 'string', 'max' => 100],
			[['reCaptcha'], \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LfgYwoUAAAAANlVyhwEcviTBaVCZfdBfAEaeS64'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
        ];
    }
}
