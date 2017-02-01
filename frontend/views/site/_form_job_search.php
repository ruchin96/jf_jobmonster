<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use common\models\CJobcategory;
use common\models\CTimecategory;
use common\models\CSalaryoffer;
use common\models\CAcdegree;
use common\models\CExplevel;
use common\models\CDresscode;

$CExplevel = CExplevel::find()->asArray()->all();
$CDresscode = CDresscode::find()->asArray()->all();
?>
<?php $form = ActiveForm::begin(['method'=>'get','options' => ['class'=>'form-horizontal']])?>
	<div class="widget widget_noo_advanced_search_widget">
		<h4 class="widget-title">Search</h4>
		<form class="widget-advanced-search">
			<div class="form-group">
				<label class="sr-only" for="search-keyword">keyword</label>
				<input type="text" class="form-control" id="search-keyword" name="jobfinder_jobname" placeholder="keyword" value=""/>
			</div>
			<div class="form-group">
				<label class="h5" for="search-category">Category</label>
				<div class="advance-search-form-control">
						<?= Html::dropDownList('jobfinder_category', null, ArrayHelper::map(CJobcategory::find()->all(), 'jobcategory_id', 'jobcategory_name'), ['class'=>'form-control-chosen form-control', 'prompt'=>'-- All Category --']) ?>
				</div>
			</div>
			<div class="form-group">
				<label class="h5" for="search-type">Type</label>
				<div class="advance-search-form-control">
					<?= Html::dropDownList('jobfinder_timecategory', null, ArrayHelper::map(CTimecategory::find()->all(), 'timecategory_id', 'timecategory_name'), ['class'=>'form-control-chosen form-control', 'prompt'=>'-- All Type --']) ?>
				</div>
			</div>
			<div class="form-group">
				<label class="h5">Salary Offer</label>
				<div class="advance-search-form-control">
					<?= Html::dropDownList('jobfinder_salaryoffer', null, ArrayHelper::map(CSalaryoffer::find()->all(), 'salaryoffer_id', 'salaryoffer_value'), ['class'=>'form-control-chosen form-control', 'prompt'=>'-- All Salary Offer --']) ?>
				</div>
			</div>
			<div class="form-group">
				<label class="h5">Experience Level</label>
				<div class="form-control-flat">
					<label class="radio pl-4">
						<input name="jobfinder_explvl" type="radio" value="" checked="true" /><i></i>
						All Experience Level
					</label>
				</div>
				<?php foreach ($CExplevel as $explvl){ ?>
				<div class="form-control-flat">
					<label class="radio pl-4">
						<input name="jobfinder_explvl" type="radio" value="<?=$explvl['explevel_id']?>"/><i></i>
						<?=$explvl['explevel_name']?>
					</label>
				</div>
				<?php } ?>
				
			</div>
			<div class="form-group">
				<label class="h5">Academic Degree</label>
				<?= Html::dropDownList('jobfinder_acdegree', null, ArrayHelper::map(CAcdegree::find()->all(), 'acdegree_id', 'acdegree_name'), ['class'=>'form-control-chosen form-control', 'prompt'=>'-- All Academic Degree --']) ?>
			</div>
			<div class="form-group">
				<label class="h5">Dress Code</label>
				<div class="form-control-flat">
					<label class="radio pl-4">
						<input name="jobfinder_dresscode" type="radio" value="" checked="true" /><i></i>
						All Dresscode
					</label>
				</div>
				<?php foreach ($CDresscode as $dc){ ?>
				<div class="form-control-flat">
					<label class="radio pl-4">
						<input name="jobfinder_dresscode" type="radio" value="<?=$dc['dresscode_id']?>"/><i></i>
						<?=$dc['dresscode_name']?>
					</label>
				</div>
				<?php } ?>
			</div>
			<button type="submit" class="btn btn-primary btn-search-submit">Search</button>
		</form>
	</div>
<?php ActiveForm::end(); ?>