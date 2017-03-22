<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title                   = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="fly-panel fly-panel-user" pad20>
    <div class="layui-tab layui-tab-brief" lay-filter="user">
        <ul class="layui-tab-title">
            <li class="layui-this">登入</li>
            <li><a href="/user/reg/">注册</a></li>
        </ul>
        <div class="layui-form layui-tab-content" id="LAY_ucm" style="padding: 20px 0;">
            <div class="layui-tab-item layui-show">
                <div class="layui-form layui-form-pane">
                    <form method="post">
                        <?php $form = ActiveForm::begin(
                            [
                                'layout' => 'default',
                                'id' => 'login-form',
                                'fieldConfig' => [
                                    'options' => ['class' => 'layui-form-item'],
                                    'labelOptions' => ['class' => "layui-form-label"],
                                    'inputOptions' => ['class' => 'layui-input', 'lay-verify' => "required"],
                                    'template' => '{label}<div class="layui-input-inline">{input}</div>'
                                ]
                            ]); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label("邮箱"); ?>

                        <?= $form->field($model, 'password')->passwordInput()->label("密码"); ?>

                        <?= $form->field($model, 'verifyCode', ['template'=>'<div class="layui-input-inline">{input}</div>'])
                            ->widget(Captcha::className()
                                , [
                                    'captchaAction' => 'user/captcha',
                                    'options' => ['class' => 'layui-input', 'lay-verify' => "required"],
                                    'template' => '{input}  <div class="layui-form-mid"><span style="color: #c00;">{image}</span></div>',
                                    'imageOptions' => [
                                        'alt' => '换一个',
                                        'title' => '换一个',
                                        'style' => ''
                                    ]
                                ])
//                            ->textInput(['placeholder' => '请回答后面的问题', 'class' => 'layui-input', 'lay-verify' => "required"])
                            ->label("人类验证");?>

                        <?= $form->field($model, 'rememberMe')->checkbox()->label("记住") ?>

                        <div class="layui-form-item">
                            <label for="L_vercode" class="layui-form-label">人类验证</label>
                            <div class="layui-input-inline">
                                <input type="text" id="L_vercode" name="vercode" required lay-verify="required"
                                       placeholder="请回答后面的问题" autocomplete="off" class="layui-input">
                            </div>
                            <div class="layui-form-mid">



                                <span style="color: #c00;">                        <?= Captcha::widget(
                                        [
                                            'name' => 'captchaimg',
                                            'captchaAction' => 'user/captcha',
                                            'imageOptions' => ['id' => 'captchaimg', 'title' => '换一个', 'alt' => '换一个', 'style' => 'cursor:pointer;margin-left:25px;'],
                                            'template' => '{image}'
                                        ]
                                    ); ?></span>
                            </div>
                        </div>

                        <div class="layui-form-item">
                            <button class="layui-btn" lay-filter="*" lay-submit>立即登录</button>
                            <span style="padding-left:20px;"> <a href="/user/forget">忘记密码？</a> </span>
                        </div>

                        <div class="layui-form-item fly-form-app">
                            <span>或者使用社交账号登入</span>
                            <a href="http://fly.layui.com:8098/app/qq"
                               onclick="layer.msg('正在通过QQ登入', {icon:16, shade: 0.1, time:0})" class="iconfont icon-qq"
                               title="QQ登入"></a>
                            <a href="http://fly.layui.com:8098/app/weibo/"
                               onclick="layer.msg('正在通过微博登入', {icon:16, shade: 0.1, time:0})"
                               class="iconfont icon-weibo" title="微博登入"></a>
                        </div>
                        <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>

