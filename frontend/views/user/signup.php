<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '注册';
$this->params['breadcrumbs'][] = $this->title;
?>



<div class="fly-panel fly-panel-user" pad20>
    <div class="layui-tab layui-tab-brief" lay-filter="user">
        <ul class="layui-tab-title">
            <li><?=Html::a("登入", ['user/login']);?></li>
            <li class="layui-this">注册</li>
        </ul>
        <div class="layui-form layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
            <div class="layui-tab-item layui-show">
                <div class="layui-form layui-form-pane">
                    <form method="post">
                        <?php
                        $form = ActiveForm::begin([
                            'layout' => 'default',
                            'id' => 'form-signup',
                            'fieldConfig' => [
                                'options' => ['class' => 'layui-form-item'],
                                'labelOptions' => ['class' => "layui-form-label"],
                                'inputOptions' => ['class' => 'layui-input', 'lay-verify' => "required"],
                                'template' => '{label}<div class="layui-input-inline">{input}</div>'
                            ]
                        ]);

                        echo $form->field($model, 'email')->textInput(['autofocus' => true, 'lay-verify'=>'email']).
                             $form->field($model, 'username')->textInput(['autofocus' => true]).
                             $form->field($model, 'password')->passwordInput().
                             $form->field($model, 'password_confirm')->passwordInput().
                             $form->field($model, 'verifyCode', ['template' => '{label}{input}'])
                                ->widget(Captcha::className(),[
                                    'captchaAction' => 'user/captcha_signup',
                                    'options' => ['class' => 'layui-input', 'lay-verify' => "required", 'placeholder' => '请输入验证码'],
                                    'imageOptions' => ['id' => 'captchaimg', 'title' => '换一个', 'alt' => '换一个', 'style' => 'cursor:pointer;margin-left:0px;'],
                                    'template' => '<div class="layui-input-inline">{input}</div>
                                                   <div class="layui-form-mid" style="padding: 0px;"> <span style="color: #c00;">{image}</span></div>'
                                ]);
                        ?>

                        <div class="layui-form-item">
                            <button class="layui-btn" lay-filter="*" lay-submit>立即登录</button>
                            <span style="padding-left:20px;"> <?=Html::a("忘记密码?", ['user/forget']);?></span>
                        </div>

                        <div class="layui-form-item fly-form-app">
                            <span>或者使用社交账号登入</span>
                            <a href="http://fly.layui.com:8098/app/qq" onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq" title="QQ登入"></a>
                            <a href="http://fly.layui.com:8098/app/weibo/" onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-weibo" title="微博登入"></a>
                        </div>

                        <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

