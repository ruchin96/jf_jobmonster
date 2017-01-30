<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BTestimonial */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'testimonial_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'testimonial_picture')->fileInput() ?>

    <?= $form->field($model, 'testimonial_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'testimonial_jobtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'testimonial_body')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

