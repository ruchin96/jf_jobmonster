<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SEducation */
/* @var $form yii\widgets\ActiveForm */
?>

    <?php $form = ActiveForm::begin(); ?>

    <?php if($model->isNewRecord){?>
        <?= $form->field($model, 'edu_id_res')->hiddenInput(['value'=>$_GET['id']])->label(false) ?>
    <?php } ?>
    
    <?= $form->field($model, 'edu_sname')->textInput(['maxlength' => true, 'placeholder'=>'institution Name'])->label(false) ?>

    <?= $form->field($model, 'edu_qualify')->textInput(['maxlength' => true, 'placeholder'=>'Qualify'])->label(false) ?>

    <?= $form->field($model, 'edu_start')->textInput(['placeholder'=>'Start Date'])->label(false) ?>

    <?= $form->field($model, 'edu_end')->textInput(['placeholder'=>'End Date'])->label(false) ?>

    <?= $form->field($model, 'edu_note')->textarea(['rows' => 6, 'placeholder'=>'Note'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

