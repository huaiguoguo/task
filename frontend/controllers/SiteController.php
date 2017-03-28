<?php
namespace frontend\controllers;

use common\models\Task;
use Yii;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use ZipArchive;


use frontend\models\ContactForm;

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

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {

//        $zip = new ZipArchive();
//        $filename = "testt.zip";
//        $zip->open('test.zip');
//        dump($zip);
//        dump($zip);
//        for ($i=0; $i<$zip->numFiles;$i++) {
//            echo "index: $i\n";
//            dump($zip->statIndex($i));
//        }
//        if ($zip->open($filename, ZIPARCHIVE::CREATE)!==TRUE) {
//            exit("cannot open <$filename>\n");
//        }
//        $zip->addFromString("testfilephp.txt", "#1 This is a test string added as testfilephp.txt.\n");
//        $zip->addFromString("testfilephp2.txt", "#2 This is a test string added as testfilephp2.txt.\n");
//        $zip->close();
//        exit;

        $this->layout = '_index';
        $list         = Task::find()->all();
        $data['list'] = $list;
        return $this->render('index', $data);
    }


    public function actionFull(){
        $data = [];
        $this->layout = "_full";
        return $this->render('full', $data);
    }


    public function actionDetail(){
        $this->layout = '_detail';
        $data = [];
        $id = Yii::$app->request->get("id");

        if(!intval($id)) {
            throw new \Exception("数据不存在", 505);
        }

        $detail = Task::findOne($id);
        $data['detail'] = $detail;

        $data['test'] = '测试';
        return $this->render('detail', $data);
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
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
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


}
