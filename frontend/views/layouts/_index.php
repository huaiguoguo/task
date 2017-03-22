<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/3/21
 * Time: 14:32
 */

use frontend\widgets\AnswerTopWidget;
use frontend\widgets\HotWidget;
use frontend\widgets\FriendLinkWidget;

?>


<!-- 先引用main.php布局文件， -->
<?php $this->beginContent('@app/views/layouts/main.php'); ?>


<div class="wrap">
    <div class="content">
        <?php echo $this->render('top_category'); ?>
        <?php echo $content; ?>
        <div style="text-align: center">
            <div class="laypage-main">
                <a href="jie/index.html" class="laypage-next">更多求解</a>
            </div>
        </div>
    </div>
</div>

<div class="edge">
    <!--近一个月回答榜-->
    <?php echo AnswerTopWidget::widget() ?>

    <!--最近热帖-->
    <?php echo HotWidget::widget(['title' => '最近热帖']) ?>

    <!--近期热议-->
    <?php echo HotWidget::widget(['title' => '近期热议']) ?>

    <!--友情链接-->
    <?php echo FriendLinkWidget::widget() ?>
</div>


<?php $this->endContent(); ?>
