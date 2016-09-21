<?php

namespace app\models;

use Yii;

class UserNetwork extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '{{%user}}';
    }

     public function rules()
    {
        return [
            // [['username', 'email', 'group', 'IDvkontakte', 'auth_key', 'password_hash', 'created_at', 'updated_at'], 'required'],
			// [['username', 'email'], 'required'],
            // [['group', 'status', 'created_at', 'updated_at'], 'integer'],
            // [['username', 'email', 'password_hash', 'password_reset_token'], 'string', 'max' => 255],
			[['username', 'email'], 'string', 'max' => 255],
            [['IDvkontakte'], 'string', 'max' => 255],
            // [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],
            [['IDvkontakte'], 'unique'],
            // [['password_reset_token'], 'unique'],
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
