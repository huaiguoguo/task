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
        <?php if($test == 1):?>
        <div class="fly-none">并无权限</div>
        <?php else:?>
        <div class="layui-form layui-form-pane">
            <form action="{{d.edit ? '/jie/edit/' : ''}}" method="post">
                <div class="layui-form-item">
                    <label for="L_title" class="layui-form-label">标题</label>
                    <div class="layui-input-block">
                        <?php if (!$is_edit):?>
                        <input type="text" id="L_title" name="title" required lay-verify="required" autocomplete="off" value="{{d.edit.title}}" {{ user.auth >= 1 ? 'required' : 'readonly' }} title="标题不可修改" class="layui-input">
                        <input type="hidden" name="id" value="{{d.edit.id}}">
                        <?php else:?>
                        <input type="text" id="L_title" name="title" required lay-verify="required" autocomplete="off" class="layui-input">
                        <?php endif;?>
                    </div>
                </div>
                <div class="layui-form-item layui-form-text">
                    <div class="layui-input-block">
                        <textarea id="demo" name="content" required lay-verify="required" placeholder="L_content请输入内容fly-editor" class="layui-textarea" style="height: 260px;">这里是内容</textarea>
                    </div>
                    <label for="L_content" class="layui-form-label" style="top: -2px;">描述</label>
                </div>
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">所在类别</label>
                        <div class="layui-input-block">
                            <select lay-verify="required" name="class">
                                <option></option>
                                <optgroup label="Layui相关">
                                    {{# for(var key in lay.base.classes){
                                    if(key < 50){ }}
                                    <option value="{{ key }}" {{(d.edit && d.edit['class'] == key) ? 'selected' : ''}}>{{ lay.base.classes[key] }}</option>
                                    {{# }
                                    } }}
                                </optgroup>
                                <optgroup label="其它交流">
                                    {{# for(var key in lay.base.classes){
                                    if(key > 99){ }}
                                    <option value="{{ key }}" {{(d.edit && d.edit['class'] == key) ? 'selected' : ''}}>{{ lay.base.classes[key] }}</option>
                                    {{# }
                                    } }}
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    <div class="layui-inline">
                        <label class="layui-form-label">悬赏飞吻</label>
                        <div class="layui-input-block">
                            <select name="experience">
                                <option value="5" {{(d.edit && d.edit.experience == 5) ? 'selected' : ''}}>5</option>
                                <option value="20" {{(d.edit && d.edit.experience == 20) ? 'selected' : ''}}>20</option>
                                <option value="50" {{(d.edit && d.edit.experience == 50) ? 'selected' : ''}}>50</option>
                                <option value="100" {{(d.edit && d.edit.experience == 100) ? 'selected' : ''}}>100</option>
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
                </div>
                <div class="layui-form-item">
                    <button class="layui-btn" lay-filter="*" lay-submit>立即发布</button>
                </div>
            </form>
        </div>
        <?php endif;?>
    </div>

</div>

<script>

<?php $this->beginBlock('layedit');?>



    layui.use('layedit', function(){
        var layedit = layui.layedit;
        layedit.build('demo', {
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
