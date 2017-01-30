<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noo-page-heading">
    <div class="container-boxed max text-center parallax-content">
        <div class="page-heading-info ">
            <h1 class="page-title">Member </h1>
        </div>
        <div class="page-sub-heading-info">
            Login or create an account 
        </div>
    </div> 
    <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
    <div class="main-content container-boxed max offset">
        <div class="row">
            <div class="noo-main col-md-12">
                <div class="account-form show-login-form-links">
                    <div class="account-log-form">
                        <div class="form-group row login-socical">
                            <div class="col-sm-9 col-sm-offset-3">
                                <div class="button_socical fb">
                                    <i class="fa fa-facebook-square"></i>
                                    <em class="fa-facebook-square">Login with Facebook</em>
                                </div>
                                <div class="button_socical gg">
                                    <i class="fa fa-google-plus"></i>
                                    <em class="fa-google-plus">Login with Google</em>
                                </div>
                                <div class="button_socical linkedin">
                                    <i class="fa fa-linkedin-square"></i>
                                    <em class="fa-linkedin-square">Login with LinkedIn</em>
                                </div>
                            </div>
                        </div>
                        <?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'form-horizontal']); ?>

                            <div style="color:#999;margin:1em 0">
                                If you forgot your password you can .
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Username</label>
                                <div class="col-sm-9">
                                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 control-label">Password</label>
                                <div class="col-sm-9">
                                    <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-9 col-sm-offset-3">
                                    <div class="checkbox">
                                        <div class="form-control-flat">
                                            <label class="checkbox">
                                                <?= $form->field($model, 'rememberMe')->checkbox(['class'=>'form-control'])?>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions form-group text-center">
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                <div class="login-form-links">
                                    <span><a href="<?=Url::to(['site/request-password-reset'])?>"><i class="fa fa-question-circle"></i> Forgot Password?</a></span>
                                    <span>Don't have an account yet? <a href="#" class="member-links member-register-link" data-rel="registerModal">Register Now <i class="fa fa-long-arrow-right"></i></a></span>
                                </div>
                            </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>  
        </div> 
    </div> 
</div>