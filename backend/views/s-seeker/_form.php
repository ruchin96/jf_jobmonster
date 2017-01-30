<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\SSeeker */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'seek_id_user')->dropDownList(ArrayHelper::map(User::find()->all(), 'id', 'username')) ?>

    <?= $form->field($model, 'seek_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seek_curr_job')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seek_curr_comp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seek_birthday')->textInput() ?>

    <?= $form->field($model, 'seek_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seek_telp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seek_facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seek_twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seek_linkedin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seek_instagram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seek_behance')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seek_googleplus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'seek_picture')->fileInput() ?>

    <?= $form->field($model, 'seek_selfdesc')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

