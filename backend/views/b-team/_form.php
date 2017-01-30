<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\BTeam */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'team_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_picture')->fileInput() ?>

    <?= $form->field($model, 'team_quote')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'team_facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_instagram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_googleplus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'team_twitter')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

