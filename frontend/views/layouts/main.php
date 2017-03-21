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
        <div class="wrap">
            <div class="content">
                <div class="fly-tab fly-tab-index">
                    <span>
                      <a href="jie/index.html">全部</a>
                      <a href="jie/index.html">未结帖</a>
                      <a href="jie/index.html">已采纳</a>
                      <a href="jie/index.html">精帖</a>
                      <a href="user/index.html">我的帖</a>
                    </span>
                    <form action="http://cn.bing.com/search" class="fly-search">
                        <i class="iconfont icon-sousuo"></i>
                        <input class="layui-input" autocomplete="off" placeholder="搜索内容，回车跳转" type="text" name="q">
                    </form>
                    <a href="jie/add.html" class="layui-btn jie-add">发布问题</a>
                </div>


                <?php echo $content;?>

                <div style="text-align: center">
                    <div class="laypage-main">
                        <a href="jie/index.html" class="laypage-next">更多求解</a>
                    </div>
                </div>

            </div>
        </div>

        <div class="edge">
            <div class="fly-panel leifeng-rank">
                <h3 class="fly-panel-title">近一月回答榜 - TOP 12</h3>
                <dl>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                    <dd>
                        <a href="user/home.html">
                            <img src="/fly/images/avatar/default.png">
                            <cite>纸飞机</cite>
                            <i>159次回答</i>
                        </a>
                    </dd>
                </dl>
            </div>
            <dl class="fly-panel fly-list-one">
                <dt class="fly-panel-title">最近热帖</dt>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
                    <span><i class="iconfont">&#xe60b;</i> 6087</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
                    <span><i class="iconfont">&#xe60b;</i> 767</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
                    <span><i class="iconfont">&#xe60b;</i> 6087</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
                    <span><i class="iconfont">&#xe60b;</i> 767</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
                    <span><i class="iconfont">&#xe60b;</i> 6087</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
                    <span><i class="iconfont">&#xe60b;</i> 767</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局（基本结构）</a>
                    <span><i class="iconfont">&#xe60b;</i> 6087</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">Java实现LayIM后端的核心代码</a>
                    <span><i class="iconfont">&#xe60b;</i> 767</span>
                </dd>
            </dl>
            <dl class="fly-panel fly-list-one">
                <dt class="fly-panel-title">近期热议</dt>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
                    <span><i class="iconfont">&#xe60c;</i> 96</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
                    <span><i class="iconfont">&#xe60c;</i> 96</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
                    <span><i class="iconfont">&#xe60c;</i> 96</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
                    <span><i class="iconfont">&#xe60c;</i> 96</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
                    <span><i class="iconfont">&#xe60c;</i> 96</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
                    <span><i class="iconfont">&#xe60c;</i> 96</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
                    <span><i class="iconfont">&#xe60c;</i> 96</span>
                </dd>
                <dd>
                    <a href="jie/detail.html">使用 layui 秒搭后台大布局之基本结构</a>
                    <span><i class="iconfont">&#xe60c;</i> 96</span>
                </dd>
            </dl>
            <div class="fly-panel fly-link">
                <h3 class="fly-panel-title">友情链接</h3>
                <dl>
                    <dd>
                        <a href="http://www.layui.com/" target="_blank">layui</a>
                    </dd>
                    <dd>
                        <a href="http://layim.layui.com/" target="_blank">LayIM</a>
                    </dd>
                    <dd>
                        <a href="http://layer.layui.com/" target="_blank">layer</a>
                    </dd>
                </dl>
            </div>
        </div>


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