<?php
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin([
	'options' => [
		'class'=>'form-horizontal'
	], 
	'fieldConfig' => [
    	'options' => [
        		'tag' => false,
    	],
	]])?>
	<div class="jstep-content">
		<div class="jpanel jpanel-resume-form">
			<div class="jpanel-title">
				<h3>Resume Detail</h3>
			</div>
			<div class="jpanel-body">
				<div class="resume-form">
					<div class="resume-form-detail">
						<div class="form-group">
							<label class="col-sm-3 control-label">Education</label>
							<div class="col-sm-9">
								<div class="noo-metabox-addable">
									<div class="noo-addable-fields">
										<div class="fields-group">
											<?= $form->field($edu, 'edu_sname[]')->textInput(['maxlength' => true, 'placeholder'=> 'School name'])->label(false) ?>

											<?= $form->field($edu, 'edu_qualify[]')->textInput(['maxlength' => true, 'placeholder'=> 'Qualification(s)'])->label(false) ?>

										    <?= $form->field($edu, 'edu_start[]')->textInput()->label(false) ?>

										    <?= $form->field($edu, 'edu_end[]')->textInput()->label(false) ?>

										    <?= $form->field($edu, 'edu_note[]')->textarea(['rows' => 5, 'placeholder'=> 'Note'])->label(false) ?>
										</div>
									</div>
									<div class="noo-addable-actions">
										<button class="btn btn-link noo-clone-fields pull-left add-edu" type="button">
											<i class="fa fa-plus-circle text-primary"></i>
											Add Education
										</button>
										<a href="#" class="noo-remove-fields pull-right">
											<i class="fa fa-times-circle"></i>
											Delete
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Work Experience</label>
							<div class="col-sm-9">
								<div class="noo-metabox-addable">
									<div class="noo-addable-fields edu-field">
										<div class="fields-group">
											<?= $form->field($work, 'work_company')->textInput(['maxlength' => true, 'placeholder'=> 'Employer Company'])->label(false) ?>

										    <?= $form->field($work, 'work_jobtitle')->textInput(['maxlength' => true, 'placeholder'=> 'Job Title'])->label(false) ?>

										    <?= $form->field($work, 'work_start')->textInput()->label(false) ?>

										    <?= $form->field($work, 'work_end')->textInput()->label(false) ?>

										    <?= $form->field($work, 'work_note')->textarea(['rows' => 6, 'placeholder'=> 'Note'])->label(false) ?>
										</div>
									</div>
									<div class="noo-addable-actions">
										<a href="#" class="noo-clone-fields pull-left">
											<i class="fa fa-plus-circle text-primary add-exp"></i>
											Add Experience
										</a>
										<a href="#" class="noo-remove-fields pull-right">
											<i class="fa fa-times-circle del-exp"></i>
											Delete
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Summary of Skill</label>
							<div class="col-sm-9">
								<div class="noo-metabox-addable">
									<div class="noo-addable-fields">
										<div class="fields-group row">
											<div class="col-sm-9 col-xs-6">
												<?= $form->field($skill, 'skill_name')->textInput(['maxlength' => true, 'placeholder'=>'Skill Name'])->label(false) ?>
											</div>
											<div class="col-sm-3 col-xs-6">												
    											<?= $form->field($skill, 'skill_prosentase')->textInput()->label(false) ?>
												<span class="percent-text">% (1 to 100)</span>
											</div>
										</div>
									</div>
									<div class="noo-addable-actions">
										<a href="#" class="noo-clone-fields pull-left">
											<i class="fa fa-plus-circle text-primary"></i>
											Add Skill
										</a>
										<a href="#" class="noo-remove-fields pull-right">
											<i class="fa fa-times-circle"></i>
											Delete
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="form-actions form-group text-center clearfix">
			<a class="btn btn-primary" href="#">Back</a>
	 		<button type="button" class="btn btn-primary">Preview</button>
	 	</div>
	</div>
<?php ActiveForm::end(); ?>