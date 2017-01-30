<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Reset password';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noo-page-heading text-center">
    <div class="container-boxed max text-center parallax-content">
        <div class="member-heading-avatar">
            <img alt='' src='<?=Yii::getAlias('@web')?>/template/images/avatar/lock-key.png' height='100' width='100'/>
        </div>
        <div class="page-heading-info ">
            <h2 class="page-title"><?= Html::encode($this->title) ?>.</h2>
        </div>
        <div class="page-sub-heading-info">
            Please choose your new password:
        </div>
        <br>
        <div class="row">
            <div class="col-lg-5">
                <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                    <?= $form->field($model, 'password')->passwordInput(['autofocus' => true]) ?>

                    <div class="form-group">
                        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
    <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
