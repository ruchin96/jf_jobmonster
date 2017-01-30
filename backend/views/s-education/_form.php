<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\SResume;

// $SResume = ArrayHelper::map(SResume::find()->where(['res_id'=>$id])->all(), 'res_id', 'res_title');
/* @var $this yii\web\View */
/* @var $model common\models\SEducation */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'edu_id_res')->hiddenInput(['value'=> $id])->label(false) ?>

    <?= $form->field($model, 'edu_sname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edu_qualify')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'edu_start')->textInput() ?>

    <?= $form->field($model, 'edu_end')->textInput() ?>

    <?= $form->field($model, 'edu_note')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

