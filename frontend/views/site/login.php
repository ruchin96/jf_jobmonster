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
<div class="modal-dialog modal-member">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title">Login</h4>
		</div>
		<div class="modal-body">
			<?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'form-horizontal']); ?>
				<div class="form-group">
					<?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class'=>'log form-control'])->label(true) ?>
				</div>
				<div class="form-group">
					<?= $form->field($model, 'password')->passwordInput(['class'=>'pwd form-control'])->label() ?>
				</div>
				<div class="form-group">
					<?= $form->field($model, 'rememberMe')->checkbox(['class'=>'rememberme'])?>
				</div>
				<div class="form-actions form-group text-center">
					<?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
					<div class="login-form-links">
						<span><a href="<?=Url::to(['site/request-password-reset'])?>"><i class="fa fa-question-circle"></i> Forgot Password?</a></span>
						<span>
							Don't have an account yet? 
							<a href="#" class="member-register-link" data-rel="registerModal">
								Register Now <i class="fa fa-long-arrow-right"></i>
							</a>
						</span>
					</div>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>