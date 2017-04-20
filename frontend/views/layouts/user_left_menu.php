<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/4/20
 * Time: 19:51
 */
use yii\helpers\Url;
?>



<ul class="layui-nav layui-nav-tree layui-inline" lay-filter="user">
    <li class="layui-nav-item <?php if($currentAction == 'home'):?>layui-this<?php endif;?> ">
        <a href="<?=Url::to(['home']);?>"> <i class="layui-icon">&#xe609;</i>  我的主页 </a>
    </li>
    <li class="layui-nav-item <?php if($currentAction == 'index'):?>layui-this<?php endif;?> ">
        <a href="<?=Url::to(['index']);?>"> <i class="layui-icon">&#xe612;</i> 用户中心  </a>
    </li>
    <li class="layui-nav-item <?php if($currentAction == 'set'):?>layui-this<?php endif;?> ">
        <a href="<?=Url::to(['set']);?>"> <i class="layui-icon">&#xe620;</i> 基本设置 </a>
    </li>
    <li class="layui-nav-item <?php if($currentAction == 'message'):?>layui-this<?php endif;?> ">
        <a href="<?=Url::to(['message']);?>"> <i class="layui-icon">&#xe611;</i> 我的消息  </a>
    </li>
</ul>



