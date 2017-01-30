<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modal-dialog modal-member">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <h4 class="modal-title">Sign Up</h4>
    </div>
    <div class="modal-body">
      <?php $form = ActiveForm::begin(['id' => 'form-signup', 'class' => 'form-horizontal']); ?>
        <div class="form-group">
            <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class'=>'user_login form-control']) ?>
        </div>
        <div class="form-group">
          <label class="control-label">Name</label>
            <input type="text" class="user_login form-control" name="name" required placeholder="Full Name">
        </div>
        <div class="form-group">
            <?= $form->field($model, 'email')->textInput(['class'=>'user_email form-control']) ?>
        </div>
        <div class="form-group">
            <?= $form->field($model, 'password')->passwordInput(['class'=>'user_password form-control']) ?>
        </div>
        <div class="form-group">
          <div class="form-control-flat">
            <?= $form->field($model, 'role')->dropDownList([ '2' => 'I am an Company looking to hire', '3' => 'I am a Seeker looking for a job', ], ['prompt' => '--Select--'])  ?>
          </div>
        </div>
        <div class="form-group text-center">
          <div class="checkbox account-reg-term">
            <div class="form-control-flat">
              <label class="checkbox">
                <input class="account_reg_term" type="checkbox" title="Please agree with the term">
                <i></i>
                I agree with the <a href="#">Terms of use</a>
              </label>
            </div>
          </div>
          <?= Html::submitButton('Signup', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
        </div>
      <?php ActiveForm::end(); ?>
    </div>
  </div>
</div>