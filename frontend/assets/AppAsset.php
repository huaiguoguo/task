<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\bootstrap\BootstrapAsset;
use yii\web\View;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        "/fly/res/layui/css/layui.css",
        "/fly/res/css/global.css",
    ];

    public $js = [
        '/fly/res/layui/layui.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
