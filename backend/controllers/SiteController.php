<?php

namespace backend\controllers;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\BackLoginForm;

/**
 * Site controller
 */
class SiteController extends BaseController
{


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
//                'only' => ['logout','signin', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signin', 'error', 'captcha'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post', 'get'],
                ],
            ],
        ];
    }


    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
                'maxLength' => 6, //最大显示个数
                'minLength' => 5,//最少显示个数
                'padding' => 5,//间距
                'height' => 37,//高度
                'width' => 120,  //宽度
                'backColor' => 0x000000,//背景颜色
                'foreColor' => 0xffffff,     //字体颜色
                'offset' => 6,        //设置字符偏移量 有效果
                'transparent' => false,
            ]
        ];
    }


    public function actionIndex()
    {
        return $this->render('index');
    }


    public function actionSignin()
    {
        $this->layout = "_signin";

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new BackLoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('signin', [
                'model' => $model,
            ]);
        }
    }


    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


}
