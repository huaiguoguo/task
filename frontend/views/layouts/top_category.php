<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/3/22
 * Time: 10:51
 */

use yii\helpers\Html;

?>


<div class="fly-tab fly-tab-index">
    <span>
        <?php echo Html::a("首页", ['site/index']); ?>
        <?php echo Html::a("全部", ['site/full']); ?>
        <?php echo Html::a("未结帖", ['site/full', 'id' => 3, 'test' => 4]); ?>
        <?php echo Html::a("已采纳", ['site/full', 'id' => 3, 'test' => 4]); ?>
        <?php echo Html::a("精帖", ['site/best', 'id' => 3, 'test' => 4]); ?>
        <?php echo Html::a("我的帖", ['user/index']); ?>
    </span>
    <form action="http://cn.bing.com/search" class="fly-search">
        <i class="iconfont icon-sousuo"></i>
        <input class="layui-input" autocomplete="off" placeholder="搜索内容，回车跳转" type="text" name="q">
    </form>
    <?php echo Html::a("发布问题", ['user/add'], ["class" => "layui-btn jie-add"]); ?>
</div>
