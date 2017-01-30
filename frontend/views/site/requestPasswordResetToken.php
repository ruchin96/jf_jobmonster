<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Request password reset';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="noo-page-heading text-center">
    <div class="container-boxed max text-center parallax-content">
        <div class="member-heading-avatar">
            <img alt='' src='<?=Yii::getAlias('@web')?>/template/images/avatar/unlock-key.png' height='100' width='100'/>
        </div>
        <div class="page-heading-info ">
            <h2 class="page-title"><?= Html::encode($this->title) ?>.</h2>
        </div>
        <div class="page-sub-heading-info">
            Please fill out your email. A link to reset password will be sent there.
        </div>
        <br>
        <div class="col-lg-6" style="display: block;">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email')->textInput(['autofocus' => true,'align'=>'middle'])->label(false) ?>

                <div class="form-group">
                    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div> 
    <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>