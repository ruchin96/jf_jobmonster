<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\CCompany;
use common\models\CSalaryoffer;
use common\models\CExplevel;
use common\models\CYearexperience;
use common\models\CAcdegree;
use common\models\CDresscode;
use common\models\CTimecategory;
use common\models\CJobcategory;
use common\models\MLocation;

$CSalaryoffer = ArrayHelper::map(CSalaryoffer::find()->all(), 'salaryoffer_id', 'salaryoffer_value');
$CExplevel = ArrayHelper::map(CExplevel::find()->all(), 'explevel_id', 'explevel_name');
$CYearexperience = ArrayHelper::map(CYearexperience::find()->all(), 'yearexp_id', 'yearexp_value');
$CAcdegree = ArrayHelper::map(CAcdegree::find()->all(), 'acdegree_id', 'acdegree_name');
$CDresscode = ArrayHelper::map(CDresscode::find()->all(), 'dresscode_id', 'dresscode_name');
$CTimecategory = ArrayHelper::map(CTimecategory::find()->all(), 'timecategory_id', 'timecategory_name');
$CJobcategory = ArrayHelper::map(CJobcategory::find()->all(), 'jobcategory_id', 'jobcategory_name');
$CCompany = ArrayHelper::map(CCompany::find()->all(), 'company_id', 'company_name');
$MLocation = ArrayHelper::map(MLocation::find()->all(), 'location_id', 'location_name');
/* @var $this yii\web\View */
/* @var $model app\models\CJobfinder */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'jobfinder_jobname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jobfinder_jobdesc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jobfinder_cover')->fileInput() ?>

    <?= $form->field($model, 'jobfinder_benefit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jobfinder_jobreq')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jobfinder_howtoapply')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'jobfinder_salaryoffer')->dropDownList($CSalaryoffer) ?>

    <?= $form->field($model, 'jobfinder_explvl')->dropDownList($CExplevel) ?>

    <?= $form->field($model, 'jobfinder_yearexp')->dropDownList($CYearexperience) ?>

    <?= $form->field($model, 'jobfinder_acdegree')->dropDownList($CAcdegree) ?>

    <?= $form->field($model, 'jobfinder_dresscode')->dropDownList($CDresscode) ?>

    <?= $form->field($model, 'jobfinder_workinghours')->textInput() ?>

    <?= $form->field($model, 'jobfinder_timecategory')->dropDownList($CTimecategory) ?>

    <?= $form->field($model, 'jobfinder_location')->dropDownList($MLocation) ?>

    <?= $form->field($model, 'jobfinder_category')->dropDownList($CJobcategory) ?>

    <?= $form->field($model, 'jobfinder_closedate')->textInput(['id'=>'datepicker-autoClose', 'class'=>'datepicker form-control']) ?>

    <?= $form->field($model, 'jobfinder_statuspost')->dropDownList([ 'p' => 'Draft', 'r' => 'Release', ]) ?>

    <?= $form->field($model, 'jobfinder_id_company')->dropDownList($CCompany) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

