<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\SSeeker;
use common\models\MLanguage;
use common\models\SHighesdegree;
use common\models\CYearexperience;
use common\models\CJobcategory;
use common\models\CExplevel;

// $SSeeker = ArrayHelper::map(SSeeker::find()->where(['seek_id'=>$id])->all(), 'seek_id', 'seek_name');
$MLanguage = ArrayHelper::map(MLanguage::find()->all(), 'language_id', 'language_name');
$SHighesdegree = ArrayHelper::map(SHighesdegree::find()->all(), 'hdegree_id', 'hdegree_name');
$CYearexperience = ArrayHelper::map(CYearexperience::find()->all(), 'yearexp_id', 'yearexp_value');
$CJobcategory = ArrayHelper::map(CJobcategory::find()->all(), 'jobcategory_id', 'jobcategory_name');
$CExplevel = ArrayHelper::map(CExplevel::find()->all(), 'explevel_id', 'explevel_name');

/* @var $this yii\web\View */
/* @var $model common\models\SResume */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'res_id_seek')->hiddenInput(['value'=>$id])->label(false) ?>

    <?= $form->field($model, 'res_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'res_id_language')->dropDownList($MLanguage) ?>

    <?= $form->field($model, 'res_id_hidegree')->dropDownList($SHighesdegree) ?>

    <?= $form->field($model, 'res_id_yearexp')->dropDownList($CYearexperience) ?>

    <?= $form->field($model, 'res_id_jobcategory')->dropDownList($CJobcategory) ?>

    <?= $form->field($model, 'res_id_joblevel')->dropDownList($CExplevel) ?>

    <?= $form->field($model, 'res_joblocation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'res_attachment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'res_selfdesc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'res_statuspost')->dropDownList([ 'p' => 'Draft', 'r' => 'Release', ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

