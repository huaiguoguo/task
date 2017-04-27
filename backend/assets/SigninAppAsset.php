<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class SigninAppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        "/inspinia/css/bootstrap.min.css",
        "/inspinia/font-awesome/css/font-awesome.css",
        "/inspinia/css/animate.css",
        "/inspinia/css/style.css"
    ];

    public $js = [
        //main
//        "/inspinia/js/jquery-3.1.1.min.js",
//        "/inspinia/js/bootstrap.min.js",
    ];


    public $depends = [
//        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
