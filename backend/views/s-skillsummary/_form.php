<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\SResume;

// $SResume = ArrayHelper::map(SResume::find()->all(), 'res_id', 'res_title');
/* @var $this yii\web\View */
/* @var $model common\models\SSkillsummary */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'skill_id_res')->hiddenInput(['value'=> $id])->label(false) ?>

    <?= $form->field($model, 'skill_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'skill_prosentase')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

