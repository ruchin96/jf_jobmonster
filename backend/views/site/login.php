<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
$this->context->layout = 'page_login';
?>

<!-- begin #page-container -->
<div id="page-container" class="fade">
    <!-- begin login -->
      <div class="login login-with-news-feed">
          <!-- begin news-feed -->
          <div class="news-feed">
              <div class="news-image">
                  <img src="<?=Yii::getAlias('@web')?>/template/assets/img/login-bg/bg-8.jpg" data-id="login-cover-image" alt="" />
              </div>
              <div class="news-caption">
                  <h4 class="caption-title"><i class="fa fa-diamond text-warning"></i> Wellcome to Job Monster Admin app</h4>
                  <p>
                      Job Monster is a web portal which help any job seeker to find every job which match with seeker's skill and talent.
                  </p>
              </div>
          </div>
          <!-- end news-feed -->
          <!-- begin right-content -->
          <div class="right-content">
              <!-- begin login-header -->
              <div class="login-header">
                  <div class="brand">
                      <!-- <span class="logo"></span> Color Admin -->
                      <img src="<?=Yii::getAlias('@web')?>/template/assets/img/logo-jobmonster.png">
                      <small>responsive bootstrap 3 admin template</small>
                  </div>
                  <div class="icon">
                      <i class="fa fa-sign-in"></i>
                  </div>
              </div>
              <!-- end login-header -->
              <!-- begin login-content -->
              <div class="login-content">
                  <?php $form = ActiveForm::begin(['id' => 'login-form', 'class'=>'margin-bottom-0']); ?>
                      <div class="form-group m-b-15">
                          <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class'=>'form-control input-lg','placeholder'=>'User Name'])->label(false)?>
                      </div>
                      <div class="form-group m-b-15">
                          <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control input-lg','placeholder'=>'Password'])->label(false)?>
                      </div>
                      <div class="checkbox m-b-30">
                          <label>
                              <?= $form->field($model, 'rememberMe')->checkbox(['id'=>'checkbox1'])->label(false) ?> Remember Me
                          </label>
                      </div>
                      <div class="login-buttons">
                           <?= Html::submitButton('Sign me in', ['class' => 'btn btn-warning btn-block btn-lg', 'name' => 'login-button']) ?>
                      </div>
                      <div class="m-t-20 m-b-40 p-b-40">
                          Not a member yet? Click <a href="register_v3.html" class="text-warning">here</a> to register.
                      </div>
                      <hr />
                      <p class="text-center text-inverse">
                          &copy; Job Monster All Right Reserved 2017
                      </p>
                  <?php ActiveForm::end(); ?>
              </div>
              <!-- end login-content -->
          </div>
          <!-- end right-container -->
      </div>
      <!-- end login -->
</div>