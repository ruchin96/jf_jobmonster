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


$CSalaryoffer = ArrayHelper::map(CSalaryoffer::find()->all(), 'salaryoffer_id', 'salaryoffer_value');
$CExplevel = ArrayHelper::map(CExplevel::find()->all(), 'explevel_id', 'explevel_name');
$CYearexperience = ArrayHelper::map(CYearexperience::find()->all(), 'yearexp_id', 'yearexp_value');
$CAcdegree = ArrayHelper::map(CAcdegree::find()->all(), 'acdegree_id', 'acdegree_name');
$CDresscode = ArrayHelper::map(CDresscode::find()->all(), 'dresscode_id', 'dresscode_name');
$CTimecategory = ArrayHelper::map(CTimecategory::find()->all(), 'timecategory_id', 'timecategory_name');
$CJobcategory = ArrayHelper::map(CJobcategory::find()->all(), 'jobcategory_id', 'jobcategory_name');
$CCompany = ArrayHelper::map(CCompany::find()->all(), 'company_id', 'company_name');
?>
<?php $form = ActiveForm::begin(['action' => $model->isNewRecord ? 'create-job' : ['update-job', 'id'=>$model->jobfinder_id] ,'options' => ['enctype' => 'multipart/form-data']]); ?>
	<div id="step_content_form" class="jstep-content">
		<div class="jpanel jpanel-job-form">
			<div class="jpanel-title">
				<h3>Describe your job vacancy</h3>
			</div>
			<div class="jpanel-body">
				<div class="form-title">
					<h3>Job Details</h3>
				</div>
				<div class="job-form">
					<div class="job-form-detail">
						<div class="form-group row">
							<label for="position" class="col-sm-3 control-label">Job Title</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_jobname')->textInput(['maxlength' => true, 'autofocus'=>true, 'placeholder'=>'Enter a short title for your job'])->label(false) ?>
						    </div>
						</div>
						<div class="form-group row">
						    <label for="desc" class="col-sm-3 control-label">Job Description</label>
						    <div class="col-sm-9">
						    	<?= $form->field($model, 'jobfinder_jobdesc')->textarea(['rows' => 8, 'placeholder'=>'Describe your job in a few paragraphs'])->label(false) ?>
						    </div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 control-label">Cover Image</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_cover')->fileInput(['accept'=>'.jpg,.png,.gif'])->label(false) ?>
							</div>
						</div>
						<div class="form-group row">
						    <label for="desc" class="col-sm-3 control-label">Job Benefits</label>
						    <div class="col-sm-9">
						    	<?= $form->field($model, 'jobfinder_benefit')->textarea(['rows' => 8, 'placeholder'=>'Describe your Benefits in a few paragraphs'])->label(false) ?>
						    </div>
						</div>
						<div class="form-group row">
						    <label for="desc" class="col-sm-3 control-label">Job Requirements</label>
						    <div class="col-sm-9">
						    	<?= $form->field($model, 'jobfinder_jobreq')->textarea(['rows' => 8, 'placeholder'=>'Describe your job Requirements in a few paragraphs'])->label(false) ?>
						    </div>
						</div>
						<div class="form-group row">
						    <label for="desc" class="col-sm-3 control-label">How to apply</label>
						    <div class="col-sm-9">
						    	<?= $form->field($model, 'jobfinder_howtoapply')->textarea(['rows' => 8, 'placeholder'=>'Describe how to apply this job in a few paragraphs'])->label(false) ?>
						    </div>
						</div>
						<div class="form-group row">
							<label for="location" class="col-sm-3 control-label">Job Location</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_location')->textInput(['maxlength' => true, 'placeholder'=>'Describe your job location'])->label(false) ?>
							</div>
						</div>
						<div class="form-group row">
							<label for="type" class="col-sm-3 control-label">Job Type</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_timecategory')->dropDownList($CTimecategory)->label(false) ?>
							</div>
						</div>
						<div class="form-group row">
							<label for="category" class="col-sm-3 control-label">Job Category</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_category')->dropDownList($CJobcategory)->label(false) ?>
							</div>
						</div>
						<div class="form-group row">
							<label for="closing" class="col-sm-3 control-label">Closing Date</label>
							<div class="col-sm-9">
						    	<?= $form->field($model, 'jobfinder_closedate')->textInput(['class'=>'dp-birthday form-control', 'placeholder'=>'YYYY-MM-DD'])->label(false) ?>
						    </div>
						</div>
						<div class="form-group row">
							<label for="salary" class="col-sm-3 control-label">Salary Offer</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_salaryoffer')->dropDownList($CSalaryoffer)->label(false) ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 control-label">Experience Level</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_explvl')->dropDownList($CExplevel)->label(false) ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 control-label">Total Years Experience</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_yearexp')->dropDownList($CYearexperience)->label(false) ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 control-label">Academic Degree</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_acdegree')->dropDownList($CAcdegree)->label(false) ?>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 control-label">Dress Code</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_dresscode')->dropDownList($CDresscode)->label(false) ?>
							</div>
						</div>
						<div class="form-group row">
							<label for="working_hours" class="col-sm-3 control-label">Working Hours</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_workinghours')->textInput()->label(false) ?>
				    		</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 control-label">Dress Code</label>
							<div class="col-sm-9">
								<?= $form->field($model, 'jobfinder_statuspost')->dropDownList([ 'p' => 'Draft', 'r' => 'Release', ])->label(false) ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-actions form-group text-center clearfix">
			<?= Html::submitButton($model->isNewRecord ? 'Continue' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-info']) ?>
	 	</div>
	</div>
<?php ActiveForm::end(); ?>