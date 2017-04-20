<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/4/20
 * Time: 19:57
 */

?>

<?php if ($currentAction == 'home'): ?>

<?php elseif ($currentAction == 'index'): ?>

    <ul class="layui-tab-title" id="LAY_mine">
        <li data-type="mine-jie" lay-id="index" class="layui-this">我发的帖（<span>89</span>）</li>
        <li data-type="collection" data-url="/collection/find/" lay-id="collection">我收藏的帖（<span>16</span>）</li>
    </ul>

<?php elseif ($currentAction == 'set'): ?>

    <ul class="layui-tab-title" id="LAY_mine">
        <li class="layui-this" lay-id="info">我的资料</li>
        <li lay-id="avatar">头像</li>
        <li lay-id="pass">密码</li>
        <li lay-id="bind">帐号绑定</li>
    </ul>

<?php elseif ($currentAction == 'message'): ?>
    <button class="layui-btn layui-btn-danger" id="LAY_delallmsg">清空全部消息</button>
<?php endif; ?>