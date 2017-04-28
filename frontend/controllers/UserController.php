<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/3/22
 * Time: 14:39
 */

namespace frontend\controllers;

use common\models\Task;
use Yii;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\Controller;
use common\models\LoginForm;

use yii\base\Exception;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;

use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use yii\web\Link;
use yii\web\Response;

class UserController extends Controller
{


    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'backColor' => 0x000000,//背景颜色
                'maxLength' => 6, //最大显示个数
                'minLength' => 5,//最少显示个数
                'padding' => 5,//间距
                'height' => 37,//高度
                'width' => 120,  //宽度
                'foreColor' => 0xffffff,     //字体颜色
                'offset' => 6,        //设置字符偏移量 有效果
                'transparent' => false,
//                'controller'=>'user/login',        //拥有这个动作的controller
            ],
            'captcha_signup' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'backColor' => 0x000000,//背景颜色
                'maxLength' => 6, //最大显示个数
                'minLength' => 5,//最少显示个数
                'padding' => 5,//间距
                'height' => 37,//高度
                'width' => 120,  //宽度
                'foreColor' => 0xffffff,     //字体颜色
                'offset' => 6,        //设置字符偏移量 有效果
                'transparent' => false,
//                'controller'=>'user/login',        //拥有这个动作的controller
            ],
        ];
    }


    public function actionHome()
    {
        $data = [];
        return $this->render('home', $data);
    }

    public function actionIndex()
    {
        $this->layout = "user";
        $data         = [];
        return $this->render('index', $data);
    }

    public function actionSet()
    {
        $this->layout = "user";
        $data         = [];
        return $this->render('set', $data);
    }


    public function actionMessage()
    {
        $this->layout = "user";
        $data         = [];
        return $this->render('message', $data);
    }


    public function actionAdd()
    {
        $data = [];

        if (Yii::$app->request->isPost && Yii::$app->request->isAjax) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            $Task                       = new Task();
            $data                       = Yii::$app->request->post();
            $data['Task']['created_at'] = time();
            $data['Task']['updated_at'] = time();

            if ($Task->load($data) && $Task->validate()) {

                if ($Task->save()) {
                    Yii::$app->response->data = ['status' => 0, 'msg' => '成功', 'code' => 200, 'action' => Url::to(['/user/index'])];
                    Yii::$app->response->setStatusCode(200);
                } else {
                    $errors = $Task->getFirstErrors();
                    $error  = '';
                    foreach ($errors as $key => $value) {
                        $error .= $value . '....';
                    }
                    Yii::$app->response->data = ['status' => 'error', 'msg' => $error, 'code' => 406];
                    Yii::$app->response->setStatusCode(200, $error);
                }

            } else {
                $errors = $Task->getFirstErrors();
                $error  = '';
                foreach ($errors as $key => $value) {
                    $error .= $value . '....';
                }
                Yii::$app->response->data = ['status' => 'error', 'msg' => $error, 'code' => 406];
                Yii::$app->response->setStatusCode(200, $error);
            }
            Yii::$app->response->send();
        }
        return $this->render('add', $data);
    }


    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;
            if ($model->login()) {
                Yii::$app->response->data = ['status' => 0, 'msg' => '成功', 'code' => 200, 'action' => Url::to(['/user/index'])];
                Yii::$app->response->setStatusCode(200);
            } else {
                $errors = $model->getFirstErrors();
                $error  = '';
                foreach ($errors as $key => $value) {
                    $error .= $value . '....';
                }
                Yii::$app->response->data = ['status' => 'error', 'msg' => $error, 'code' => 406];
                Yii::$app->response->setStatusCode(200, $error);
            }
            Yii::$app->response->send();
        }

        return $this->render('login', [
            'model' => $model,
        ]);

    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            Yii::$app->response->format = Response::FORMAT_JSON;

            //注册
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    $url = Url::to(['user/index']);
                } else {
                    $url = Url::to(['user/login']);
                }

                $data = ['status' => 0, 'msg' => '恭喜你, 注册成功啦!', 'code' => 200, 'action' => $url];
                Yii::$app->response->setStatusCode(200);

            } else {
                $errors = $model->getFirstErrors();
                $error  = '';
                foreach ($errors as $value) {
                    if (!empty($value)) {
                        $error .= $value . '</br>';
                    }
                }
                $data = ['status' => 'error', 'msg' => $error, 'code' => 406];
                Yii::$app->response->setStatusCode(200, $error);
            }
            Yii::$app->response->data = $data;
            Yii::$app->response->send();
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }


    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
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
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }


}