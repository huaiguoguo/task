<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/3/22
 * Time: 10:53
 */

use frontend\widgets\HotWidget;

?>


<!-- 先引用main.php布局文件， -->
<?php $this->beginContent('@app/views/layouts/main.php');?>

<div class="wrap">
    <div class="content detail">
        <?php echo $content;?>
    </div>
</div>

<div class="edge">
    <!--最近热帖-->
    <?php echo HotWidget::widget(['title' => '最近热帖']) ?>

    <!--近期热议-->
    <?php echo HotWidget::widget(['title' => '近期热议']) ?>
</div>

<?php $this->endContent();?>
