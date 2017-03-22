<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/3/22
 * Time: 11:09
 */
?>

<!-- 先引用main.php布局文件， -->
<?php $this->beginContent('@app/views/layouts/main.php'); ?>

<div class="wrap">
    <div class="content" style="margin-right: 0px">
        <?php echo $this->render('top_category'); ?>
        <?php echo $content; ?>
    </div>
</div>

<?php $this->endContent(); ?>


