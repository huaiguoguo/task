<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/3/28
 * Time: 16:28
 */
use yii\helpers\Html;
use backend\assets\AppAsset;
use backend\widgets\NavWidget;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<!--class="fixed-sidebar no-skin-config full-height-layout"-->
<body class="fixed-sidebar no-skin-config full-height-layout">

<?php $this->beginBody() ?>

<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <?php echo NavWidget::widget(); ?>
    </nav>
    <div id="page-wrapper" class="gray-bg">
        <?= $content; ?>
    </div>

</div>


<?php $this->beginBlock('test') ?>
    setTimeout(function () {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr.success('Responsive 郭锋', '欢迎光临 INSPINIA');

    }, 1300);
<?php $this->endBlock() ?>
<?php $this->registerJs($this->blocks['test'], \yii\web\View::POS_END); ?>


<?php $this->endBody() ?>
</body>
</html>

<?php $this->endPage() ?>

