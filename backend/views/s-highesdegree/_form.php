<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SHighesdegree */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hdegree_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

