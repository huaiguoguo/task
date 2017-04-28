<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\bootstrap\BootstrapAsset;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        "/fly/layui/css/layui.css",
        "/fly/css/global.css",
    ];

    public $js = [
        '/fly/layui/layui.js'
    ];

    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
