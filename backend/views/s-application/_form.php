<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\SResume;

/* @var $this yii\web\View */
/* @var $model common\models\SApplication */
/* @var $form yii\widgets\ActiveForm */

?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'app_id_seek')->hiddenInput(['value'=>$id])->label(false) ?>

    <?= $form->field($model, 'app_id_job')->textInput() ?>

    <?= $form->field($model, 'app_status')->dropDownList([ 'p' => 'Pending', 'r' => 'Rejected', 'a' => 'Accepted', ]) ?>

    <?= $form->field($model, 'app_note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'app_note_comp')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'app_id_res')->dropDownList(ArrayHelper::map(SResume::find()->where(['res_id_seek'=>$id])->all(), 'res_id', 'res_title')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

