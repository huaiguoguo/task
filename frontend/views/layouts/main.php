<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/3/21
 * Time: 11:00
 */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>


<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="keywords" content="fly,layui,前端社区">
        <meta name="description" content="Fly社区是模块化前端UI框架Layui的官网社区，致力于为web开发提供强劲动力">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?> 基于 layui 的极简社区页面模版</title>
        <?php $this->head(); ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <div class="header">
        <div class="main">
            <a class="logo" href="/" title="Fly">Fly社区</a>
            <div class="nav">
                <a class="nav-this" href="jie/index.html">
                    <i class="iconfont icon-wenda"></i>问答
                </a>
                <a href="http://www.layui.com/" target="_blank">
                    <i class="iconfont icon-ui"></i>框架
                </a>
            </div>

            <div class="nav-user">
                <!-- 未登入状态 -->
                <a class="unlogin" href="user/login.html"><i class="iconfont icon-touxiang"></i></a>
                <span><a href="user/login.html">登入</a><a href="user/reg.html">注册</a></span>
                <p class="out-login">
                    <a href="" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq"
                       title="QQ登入"></a>
                    <a href="" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})"
                       class="iconfont icon-weibo" title="微博登入"></a>
                </p>

                <!-- 登入后的状态 -->
                <!--
                <a class="avatar" href="user/index.html">
                  <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0">
                  <cite>贤心</cite>
                  <i>VIP2</i>
                </a>
                <div class="nav">
                  <a href="/user/set/"><i class="iconfont icon-shezhi"></i>设置</a>
                  <a href="/user/logout/"><i class="iconfont icon-tuichu" style="top: 0; font-size: 22px;"></i>退了</a>
                </div> -->

            </div>
        </div>

    </div>

    <div class="main layui-clear">
        <?php echo $content;?>
    </div>

    <div class="footer">
        <p><a href="http://fly.layui.com/">Fly社区</a> 2017 &copy; <a href="http://www.layui.com/">layui.com</a></p>
        <p>
            <a href="http://fly.layui.com/auth/get" target="_blank">产品授权</a>
            <a href="http://fly.layui.com/jie/8157.html" target="_blank">获取Fly社区模版</a>
            <a href="http://fly.layui.com/jie/2461.html" target="_blank">微信公众号</a>
        </p>
    </div>
    <script src="/fly/layui/layui.js"></script>
    <script>
        layui.cache.page = '';
        layui.cache.user = {
            username: '游客'
            , uid: -1
            , avatar: '/fly/images/avatar/00.jpg'
            , experience: 83
            , sex: '男'
        };
        layui.config({
            version: "2.0.0"
            , base: '/fly/mods/'
        }).extend({
            fly: 'index'
        }).use('fly');
    </script>


    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>