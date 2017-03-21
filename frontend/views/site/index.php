<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


<ul class="fly-list fly-list-top">

    <li class="fly-list-li">
        <a href="user/home.html" class="fly-list-avatar">
            <img src="http://tp4.sinaimg.cn/1345566427/180/5730976522/0" alt="">
        </a>
        <h2 class="fly-tip">
            <a href="jie/detail.html">基于 layui的轻量级问答社区页面模版 V2版本</a>
            <span class="fly-tip-stick">置顶</span>
            <span class="fly-tip-jing">精帖</span>
        </h2>
        <p>
            <span><a href="user/home.html">贤心</a></span>
            <span>刚刚</span>
            <span>layui框架综合</span>
            <span class="fly-list-hint">
                                <i class="iconfont" title="回答">&#xe60c;</i> 317
                                <i class="iconfont" title="人气">&#xe60b;</i> 6830
                            </span>
        </p>
    </li>
    <li class="fly-list-li">
        <a href="user/home.html" class="fly-list-avatar">
            <img src="/fly/images/avatar/00.jpg" alt="">
        </a>
        <h2 class="fly-tip">
            <a href="jie/detail.html">基于 layui的轻量级问答社区页面模版 V2版本</a>
            <span class="fly-tip-stick">置顶</span>
        </h2>
        <p>
            <span><a href="user/home.html">纸飞机</a></span>
            <span>30分钟前</span>
            <span>技术闲谈</span>
            <span class="fly-list-hint">
                                <i class="iconfont" title="回答">&#xe60c;</i> 502
                                <i class="iconfont" title="人气">&#xe60b;</i> 81689
                            </span>
        </p>
    </li>
</ul>
<ul class="fly-list">
    <?php foreach ($list as $key => $value): ?>
        <li class="fly-list-li">
            <a href="user/home.html" class="fly-list-avatar">
                <img src="<?= $value->taskUser->avatar;?>" alt="<?= $value->taskUser->username.'  '.$value->title;; ?> ">
            </a>
            <h2 class="fly-tip">
                <a href="jie/detail.html"><?= $value->title; ?></a>
            </h2>
            <p>
                <span><a href="user/home.html"><?= $value->taskUser->username; ?></a></span>
                <span>1小时前</span>
                <span><?= $value->taskCategory->category_name; ?></span>
                <span class="fly-list-hint">
                                <i class="iconfont" title="回答">&#xe60c;</i> 8
                                <i class="iconfont" title="人气">&#xe60b;</i> 106
                            </span>
            </p>
        </li>
    <?php endforeach; ?>
</ul>