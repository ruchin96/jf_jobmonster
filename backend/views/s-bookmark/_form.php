<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\CJobfinder;
use common\models\SSeeker;

/* @var $this yii\web\View */
/* @var $model common\models\SBookmark */
/* @var $form yii\widgets\ActiveForm */

?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bookmark_id_user')->hiddenInput(['value'=>$id])->label(false) ?>

    <?= $form->field($model, 'bookmark_id_job')->dropDownList(ArrayHelper::map(CJobfinder::find()->all(), 'jobfinder_id', 'jobfinder_jobname')) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

