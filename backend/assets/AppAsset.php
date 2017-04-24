<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        "/inspinia/css/bootstrap.min.css",
        "/inspinia/font-awesome/css/font-awesome.css",
        "/inspinia/css/animate.css",

        "/inspinia/css/plugins/codemirror/codemirror.css",
        "/inspinia/css/plugins/codemirror/ambiance.css",
        "/inspinia/css/plugins/toastr/toastr.min.css",
        "/inspinia/js/plugins/gritter/jquery.gritter.css",

        "/inspinia/css/style.css"
    ];

    public $js = [
        //main
//        "/inspinia/js/jquery-3.1.1.min.js",
        "/inspinia/js/bootstrap.min.js",
        "/inspinia/js/plugins/metisMenu/jquery.metisMenu.js",
        "/inspinia/js/plugins/slimscroll/jquery.slimscroll.min.js",

        "/inspinia/js/inspinia.js",
        "/inspinia/js/plugins/pace/pace.min.js",

        //插件
        "/inspinia/js/plugins/toastr/toastr.min.js",


    ];
    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
