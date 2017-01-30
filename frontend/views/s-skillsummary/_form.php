<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SSkillsummary */
/* @var $form yii\widgets\ActiveForm */
?>

    <?php $form = ActiveForm::begin(); ?>

	<?php if($model->isNewRecord){?>
        <?= $form->field($model, 'skill_id_res')->hiddenInput(['value'=>$_GET['id']])->label(false) ?>
    <?php } ?>

    <?= $form->field($model, 'skill_name')->textInput(['maxlength' => true, 'placeholder'=>'Skill Name'])->label(false) ?>

    <?= $form->field($model, 'skill_prosentase')->textInput(['placeholder'=>'Skill Prosentase (%)'])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

