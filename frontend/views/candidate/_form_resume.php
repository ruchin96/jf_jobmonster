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

$SSeeker = ArrayHelper::map(SSeeker::find()->all(), 'seek_id', 'seek_name');
$MLanguage = ArrayHelper::map(MLanguage::find()->all(), 'language_id', 'language_name');
$SHighesdegree = ArrayHelper::map(SHighesdegree::find()->all(), 'hdegree_id', 'hdegree_name');
$CYearexperience = ArrayHelper::map(CYearexperience::find()->all(), 'yearexp_id', 'yearexp_value');
$CJobcategory = ArrayHelper::map(CJobcategory::find()->all(), 'jobcategory_id', 'jobcategory_name');
$CExplevel = ArrayHelper::map(CExplevel::find()->all(), 'explevel_id', 'explevel_name');
?>
<?php $form = ActiveForm::begin(['action' => $model->isNewRecord ? 'create-resume' : ['update-resume', 'id'=>$model->res_id] ,'options' => ['enctype' => 'multipart/form-data']]); ?>
	<div class="resume-form">
		<div class="resume-form-general row">
			<div class="col-sm-7">
				<div class="form-group">
					<label for="title" class="col-sm-5 control-label">Resume Title</label>
					<div class="col-sm-7">
				    	<?= $form->field($model, 'res_title')->textInput(['maxlength' => true])->label(false) ?>
				    </div>
				</div>
				<div class="form-group">
					<label for="language" class="col-sm-5 control-label">Language</label>
					<div class="col-sm-7">
				    	<?= $form->field($model, 'res_id_language')->dropDownList($MLanguage)->label(false) ?>
				    </div>
				</div>
				<div class="form-group">
					<label for="highest_degree" class="col-sm-5 control-label">Highest Degree Level</label>
					<div class="col-sm-7">
				    	<?= $form->field($model, 'res_id_hidegree')->dropDownList($SHighesdegree)->label(false) ?>
				    </div>
				</div>
				<div class="form-group">
					<label for="experience_year" class="col-sm-5 control-label">Total Year Experience</label>
					<div class="col-sm-7">
				    	<?= $form->field($model, 'res_id_yearexp')->dropDownList($CYearexperience)->label(false) ?>
				    </div>
				</div>
				<div class="form-group">
					<label for="job_category" class="col-sm-5 control-label">Job Category</label>
					<div class="col-sm-7">
						<?= $form->field($model, 'res_id_jobcategory')->dropDownList($CJobcategory)->label(false) ?>
				    </div>
				</div>
				<div class="form-group">
					<label for="job_level" class="col-sm-5 control-label">Expected Job Level</label>
					<div class="col-sm-7">
				    	<?= $form->field($model, 'res_id_joblevel')->dropDownList($CExplevel)->label(false) ?>
				    </div>
				</div>
				<div class="form-group">
					<label for="job_location" class="col-sm-5 control-label">Job Location</label>
					<div class="col-sm-7">
						<?= $form->field($model, 'res_joblocation')->textInput(['maxlength' => true])->label(false) ?>
				    </div>
				</div>
				<div class="form-group">
					<label for="job_location" class="col-sm-5 control-label">Status Post</label>
					<div class="col-sm-7">
						<?= $form->field($model, 'res_statuspost')->dropDownList([ 'p' => 'Draft', 'r' => 'Release', ])->label(false) ?>
				    </div>
				</div>
			</div>
			<div class="col-sm-5">
				<label for="file_cv" class="control-label">Upload your Attachment</label>
				<div class="upload-to-cv clearfix">
					<?= $form->field($model, 'res_attachment')->fileInput()->label(false) ?>
					<p class="help-block">Allowed file: doc,docx,pdf</p>
				</div>
			</div>
			<div class="col-sm-5">
				<label for="desc" class="control-label">Introduce Yourself</label>
				<?= $form->field($model, 'res_selfdesc')->textarea(['rows' => 14, 'placeholder'=>'Describe your resume in a few paragraphs'])->label(false) ?>
			</div>
		</div>
	</div>
	<div class="form-actions form-group text-center clearfix">
        <?= Html::submitButton($model->isNewRecord ? 'Continue' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-info']) ?>
 	</div>
<?php ActiveForm::end(); ?>
