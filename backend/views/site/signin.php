<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<?php $form = ActiveForm::begin(['id' => 'login-form', 'options'=>['class'=>'m-ts', 'role'=>'form' ] ]); ?>

<?= $form->field($model, 'username')->textInput(['autofocus' => true,'placeholder'=>'用户名'])->label('') ?>

<?= $form->field($model, 'password')->passwordInput(['placeholder'=>'密码'])->label('') ?>



<?=$form->field($model, 'verifyCode', ['template' => '{label}{input}{error}'])
    ->widget(Captcha::className(),[
        'captchaAction' => 'site/captcha',
        'options' => ['id'=>'backloginform-verifycode', 'class'=>'form-control', 'placeholder' => '请输入验证码'],
        'imageOptions' => ['id' => 'captchaimg', 'title' => '换一个', 'alt' => '换一个', 'style' => 'cursor:pointer;margin-left:0px;'],
        'template' => ' <div class="row">
                            <div class="col-md-7">{input}</div>
                            <div class="col-md-3">{image} </div> 
                        </div> '
    ])->label('');
?>

<?= $form->field($model, 'rememberMe')->checkbox()->label('记住我'); ?>

<div class="form-group">
    <?= Html::submitButton('登录', ['class' => 'btn btn-primary block full-width m-b', 'name' => 'login-button']) ?>
</div>
<p class="m-t">
    <small>BBS base on Yii 2 &copy; 2017</small>
</p>
<?php ActiveForm::end(); ?>