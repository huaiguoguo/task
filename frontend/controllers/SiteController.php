<?php

namespace frontend\controllers;

use common\models\NestedCategory;
use common\models\Task;
use Yii;

use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Test;

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



    public function actionIndex()
    {
        $this->layout = '_index';
        $list         = Task::find()->all();
        $data['list'] = $list;
        return $this->render('index', $data);
    }


    public function actionFull()
    {
        $data         = [];
        $this->layout = "_full";
        return $this->render('full', $data);
    }


    public function actionDetail()
    {
        $this->layout = '_detail';
        $data         = [];
        $id           = Yii::$app->request->get("id");

        if (!intval($id)) {
            throw new \Exception("数据不存在", 505);
        }

        $detail         = Task::findOne($id);
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


    public function ZipTest()
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

    }


    public function actionTest()
    {
        //查子类
        //查某个分类下面的子分类
        //删除父分类
        //删除子分类
    }


    public function addChildCate()
    {
        $pid    = Yii::$app->request->get("pid");
        $Parent = NestedCategory::findOne($pid);

        //插入子节点：它的左右值与它的父级有关：左值=父级的右值，右值=父级的右值+1
        //这时要更新的数据有：
        //父级的右值，
        //所有左值大于父级左级，右值大于低级右值的节点左右值都应该+2；

        $NestedCategory = new NestedCategory();

        $NestedCategory->name = "测试子类";
        $NestedCategory->lft  = $Parent->rgt;
        $NestedCategory->rgt  = $Parent->rgt + 1;
        $NestedCategory->save();

        $NestedCategory::updateAll(['lft' => 2, 'rgt' => 2], ['']);

//        $table->where('lft>' . $resr['lft'] . ' and rgt>=' . $rgt . ' and shops_id=' . $shopsid)->setInc('lft', 2);
//        $table->where('lft>' . $resr['lft'] . ' and rgt>=' . $rgt . ' and shops_id=' . $shopsid)->setInc('rgt', 2);

        $Parent->rgt += 2;
        $Parent->save();
    }


    public function addTopCate()
    {
        $NestedCategory = new NestedCategory();
        $result         = $NestedCategory::find()->orderBy("rgt desc")->asArray()->one();

        //插入最顶级节点：它的左右值与该树中最大的右值有关：左值=最大右值+1，右值=最大右值+2，你可以自己模拟一下；
        $NestedCategory->name = "测试父类";
        $NestedCategory->lft  = $result->rgt + 1;
        $NestedCategory->rgt  = $result->rgt + 2;
        $NestedCategory->save();
    }


}
