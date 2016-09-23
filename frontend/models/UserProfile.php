<?php

namespace app\models;

use Yii;

class UserProfile extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%user}}';
    }

     public function rules()
    {
        return [
			
            [['username', 'email', 'IDvkontakte'], 'unique'],
			[['username', 'email'], 'trim'],
			[['username', 'email'], 'default'],
			[['username', 'email', 'IDvkontakte'], 'string', 'min' => 2, 'max' => 255],
            ['email', 'email'],
        ];
    }

    /* public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'email' => 'Email',
            'group' => 'Group',
            'IDvkontakte' => 'Idvkontakte',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    } */
}
