<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\SResume;

// $SResume = ArrayHelper::map(SResume::find()->all(), 'res_id', 'res_title');
/* @var $this yii\web\View */
/* @var $model common\models\SWorkexperience */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'work_id_res')->hiddenInput(['value'=> $id])->label(false) ?>

    <?= $form->field($model, 'work_company')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_jobtitle')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'work_start')->textInput() ?>

    <?= $form->field($model, 'work_end')->textInput() ?>

    <?= $form->field($model, 'work_note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

