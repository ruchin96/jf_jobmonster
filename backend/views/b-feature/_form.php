<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BFeature */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'feature_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'feature_body')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'feature_icon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
