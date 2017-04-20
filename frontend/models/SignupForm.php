<?php

namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $password_confirm;
    public $verifyCode;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 30],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => '此邮箱已存在'],

            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => '此昵称已存在'],
            ['username', 'string', 'min' => 2, 'max' => 30],

            [['password', 'password_confirm'], 'required'],
            [['password', 'password_confirm'], 'string', 'min' => 6],

            ['password_confirm', 'compare', 'compareAttribute' => 'password', 'message'=>'两次密码输入不一致'],

            ['verifyCode', 'required'],
            ['verifyCode', 'captcha', 'captchaAction' => 'user/captcha_signup', 'message' => '验证码有误']


        ];
    }


    public function attributeLabels()
    {
        return [
            'email' => '邮箱',
            'username' => '昵称',
            'password' => '密码',
            'password_confirm' => '确认密码',
            'verifyCode' => '验证码',
        ];
    }


    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user           = new User();
        $user->username = $this->username;
        $user->email    = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();

        return $user->save() ? $user : null;
    }
}
