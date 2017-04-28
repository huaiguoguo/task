<?php
/**
 * Created by PhpStorm.
 * Author: 火柴
 * Email:49650007@qq.com
 * Date: 2017/3/22
 * Time: 14:51
 */
$test = 2;
$is_edit = 1;
?>


<div class="main layui-clear">
    <div class="fly-panel" pad20>
        <h2 class="page-title">编辑问题/发表问题</h2>

<!--        <div class="fly-none">并无权限</div>-->

        <div class="layui-form layui-form-pane">
            <form method="post">
                <input type="hidden" name="Task[created_uid]" value="<?=Yii::$app->user->identity->getId();?>"/>
                <input type="hidden" name="<?=Yii::$app->request->csrfParam;?>" value="<?=Yii::$app->request->csrfToken;?>"/>
                <div class="layui-form-item">
                    <label for="L_title" class="layui-form-label">标题</label>
                    <div class="layui-input-block">
                        <input type="text" id="L_title" name="Task[title]" required lay-verify="required" autocomplete="off" class="layui-input">
                    </div>
                </div>
<!--                L_content请输入内容fly-editor-->
                <div class="layui-form-item layui-form-text">
                    <div class="layui-input-block">
                        <textarea id="L_content" name="Task[content]" required lay-verify="required" class="layui-textarea fly-editor" style="height: 380px"></textarea>
                    </div>
                    <label for="L_content" class="layui-form-label" style="top: -2px;">描述</label>
                </div>
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">所在类别</label>
                        <div class="layui-input-block">
                            <select lay-verify="required" name="Task[category_id]">
                                <optgroup label="Layui相关">
                                    <option value="1">测试</option>
                                </optgroup>
                                <optgroup label="其它交流">
                                    <option value="2">测试2</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <!--
                    <div class="layui-inline">
                        <label class="layui-form-label">悬赏飞吻</label>
                        <div class="layui-input-block">
                            <select name="experience">
                                <option value="5">5</option>
                                <option value="20">20</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="layui-form-item">
                    <label for="L_vercode" class="layui-form-label">人类验证</label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_vercode" name="vercode" required lay-verify="required" placeholder="请回答后面的问题" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid">
                        <span style="color: #c00;">{{d.vercode}}</span>
                    </div>
                </div>-->
                <div class="layui-form-item">
                    <button class="layui-btn" lay-filter="*" lay-submit>立即发布</button>
                </div>
            </form>
        </div>

    </div>

</div>

<script>

<?php $this->beginBlock('layedit');?>



    layui.use('layedit', function(){
        var layedit = layui.layedit;
        layedit.build('lay_edit', {
            height: 180,
            tool: [
                'strong' //加粗
                ,'italic' //斜体
                ,'underline' //下划线
                ,'del' //删除线
                ,'|' //分割线
                ,'code' //清除链接
                ,'left' //左对齐
                ,'center' //居中对齐
                ,'right' //右对齐
                ,'link' //超链接
                ,'unlink' //清除链接
                ,'|' //分割线
                ,'face' //表情
                ,'image' //插入图片
            ]
        });
    });

<?php $this->endBlock();?>

</script>

<?php $this->registerJs($this->blocks['layedit'], \yii\web\View::POS_READY); ?>
