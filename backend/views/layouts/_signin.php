<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/4/24
 * Time: 18:33
 */
use yii\helpers\Html;
use backend\assets\AppAsset;

AppAsset::register($this);

$this->title = '登录';
$this->params['breadcrumbs'][] = $this->title;

?>



<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title>INSPINIA | <?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>


<!--    <link href="/inspinia/css/bootstrap.min.css" rel="stylesheet">-->
<!--    <link href="/inspinia/font-awesome/css/font-awesome.css" rel="stylesheet">-->
<!---->
<!--    <link href="/inspinia/css/animate.css" rel="stylesheet">-->
<!--    <link href="/inspinia/css/style.css" rel="stylesheet">-->
<!--    <script type="text/javascript" href="/inspinia/js/bootstrap.min.js"></script>-->

</head>

<body class="gray-bg">

<?php $this->beginBody() ?>

<div class="loginColumns animated fadeInDown">
    <div class="row">

        <div class="col-md-6">
            <h2 class="font-bold">Welcome to IN+</h2>

            <p>
                Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
            </p>

            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
            </p>

            <p>
                When an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <p>
                <small>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</small>
            </p>

        </div>
        <div class="col-md-6">
            <div class="ibox-content">


                <?=$content;?>


            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            Copyright Example Company
        </div>
        <div class="col-md-6 text-right">
            <small>© 2017-2021</small>
        </div>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>






