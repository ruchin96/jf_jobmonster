<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SWorkexperience */
/* @var $form yii\widgets\ActiveForm */
?>

    <?php $form = ActiveForm::begin(); ?>

    <?php if($model->isNewRecord){?>
        <?= $form->field($model, 'work_id_res')->hiddenInput(['value'=>$_GET['id']])->label(false) ?>
    <?php } ?>

    <?= $form->field($model, 'work_company')->textInput(['maxlength' => true, 'placeholder'=>'Company Name'])->label(false) ?>

    <?= $form->field($model, 'work_jobtitle')->textInput(['maxlength' => true, 'placeholder'=>'Job Title'])->label(false) ?>

    <?= $form->field($model, 'work_start')->textInput(['placeholder'=>'Work Start'])->label(false) ?>

    <?= $form->field($model, 'work_end')->textInput(['placeholder'=>'Work End'])->label(false) ?>

    <?= $form->field($model, 'work_note')->textarea(['rows' => 6, 'placeholder'=>'Note'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

