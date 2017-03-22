<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/3/22
 * Time: 10:59
 */
use frontend\widgets\AnswerTopWidget;
use frontend\widgets\HotWidget;
use frontend\widgets\FriendLinkWidget;

?>


<!--近一个月回答榜-->
<?php echo AnswerTopWidget::widget() ?>

<!--最近热帖-->
<?php echo HotWidget::widget(['title' => '最近热帖']) ?>

<!--近期热议-->
<?php echo HotWidget::widget(['title' => '近期热议']) ?>

<!--友情链接-->
<?php echo FriendLinkWidget::widget() ?>