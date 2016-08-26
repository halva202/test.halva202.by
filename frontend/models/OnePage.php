<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "one_page".
 *
 * @property integer $id
 * @property string $controller
 * @property string $action
 * @property string $text
 */
class OnePage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'one_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['text'], 'string'],
            [['controller', 'action'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'controller' => 'Controller',
            'action' => 'Action',
            'text' => 'Text',
        ];
    }
	
	public static function oneRecord($controller, $action)
    {
        $oneRecord = OnePage::find()->where(['controller'=>$controller, 'action'=>$action])->one();
		$info = $oneRecord['text'];
		return $info;
    }
}
