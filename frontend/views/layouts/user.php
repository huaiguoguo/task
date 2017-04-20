<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/4/20
 * Time: 19:59
 */
$currentController = Yii::$app->controller->id;
$currentAction = Yii::$app->controller->action->id;
?>


<!-- 先引用main.php布局文件， -->
<?php $this->beginContent('@app/views/layouts/main.php'); ?>

    <div class="main fly-user-main layui-clear">
        <?php echo $this->render('user_left_menu',['currentController'=>$currentController, 'currentAction'=>$currentAction]); ?>
        <div class="site-tree-mobile layui-hide">
            <i class="layui-icon">&#xe602;</i>
        </div>
        <div class="site-mobile-shade"></div>

        <div class="fly-panel fly-panel-user" pad20>
            <!--
            <div class="fly-msg" style="margin-top: 15px;">
              您的邮箱尚未验证，这比较影响您的帐号安全，<a href="activate.html">立即去激活？</a>
            </div>
            -->
            <div class="layui-tab layui-tab-brief" lay-filter="user">
                <?php echo $this->render('user_right_top', ['currentController'=>$currentController, 'currentAction'=>$currentAction]);?>
                <?php echo $content;?>
            </div>
        </div>
    </div>

<?php $this->endContent(); ?>
