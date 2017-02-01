<?php
	use yii\helpers\Url;
	use yii\helpers\Html;
	use yii\widgets\ActiveForm;
	use common\models\SSeeker;

	$formatter = Yii::$app->formatter;

	$job = $sel_jobs;

	if(!Yii::$app->user->isGuest){
		$id_user = Yii::$app->user->identity->id;
		$sseeker = SSeeker::find()->where(['seek_id_user'=>$id_user])->asArray()->one();
	}
?>
<div class="noo-page-heading">
	<div class="container-boxed max parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title"><?=$job['jobfinder_jobname']?> <span class="count">1418 views</span> </h1>
		</div>
		<div class="page-sub-heading-info">
			<p class="content-meta">
				<span class="job-type part-time">
					<a href="#"><i class="fa fa-bookmark"></i><?=$job['jobfinderTimecategory']['timecategory_name']?></a>
				</span>
				<span class="job-location">
					<i class="fa fa-map-marker"></i>
					<a href="#"><em><?=$job['jobfinderLocation']['location_name']?></em></a>
				</span>
				<span>
					<time class="entry-date" datetime="2015-08-10T09:46:53+00:00">
						<i class="fa fa-calendar"></i>
						<?= $formatter->asDate($job['jobfinder_createdat'], 'long')?>
						 - <?= $formatter->asDate($job['jobfinder_closedate'], 'long')?>
					</time>
				</span>
				<span>
					<i class="fa fa-folder"></i>
					<a href="#"> <?=$job['jobfinderCategory']['jobcategory_name']?></a>
				</span>
				<span>
					<a href="#"><i class="fa fa-print"></i> Print</a>
				</span>
			</p>
		</div> 
	</div>
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
	<div class="container-boxed max offset main-content single-noo_job">
		<div class="row">
			<div class="noo-main col-md-8">
				<div class="job-desc">
					<h3>Job Description</h3>
					<p><?=$job['jobfinder_jobdesc']?>.</p>
					<h3>Benefits</h3>
					<ul>
						<?=$job['jobfinder_benefit']?>
					</ul>
					<h3>Job Requirements</h3>
					<ol>
						<?=$job['jobfinder_jobreq']?>
					</ol>
					<h3>How To Apply</h3>
					<p>
						<?=$job['jobfinder_howtoapply']?>
					</p>
					<div class="job-custom-fields">
						<h3>Salary Offer</h3>
						<p><?=$job['jobfinderSalaryoffer']['salaryoffer_value']?></p>
						<h3>Experience Level</h3>
						<p>
							<i class="fa fa-check-circle"></i>
							<?=$job['jobfinderExplvl']['explevel_name']?>
						</p>
						<h3>Total Years Experience</h3>
						<p>
							<i class="fa fa-check-circle"></i>
							<?=$job['jobfinderYearexp']['yearexp_value']?>
						</p>
						<h3>Academic Degree</h3>
						<p>
							<i class="fa fa-check-circle"></i>
							<?=$job['jobfinderAcdegree']['acdegree_name']?>
						</p>
						<h3>Dress Code</h3>
						<p>
							<i class="fa fa-check-circle"></i>
							<?=$job['jobfinderDresscode']['dresscode_name']?>
						</p>
						<h3>Working Hours</h3>
						<p><?=$job['jobfinder_workinghours']?> hours/day<br/>7 days/week</p>
					</div>
				</div>
				<div class="job-action">
					<?php if (!Yii::$app->user->isGuest) {
						if (Yii::$app->user->identity->role==3){
                	?>
					<?php $form = ActiveForm::begin(['class'=>'form-horizontal']); $i=0;?>
					<a class="btn btn-primary modal-btn" data-url="<?=Url::to(['candidate/send-app','id_user'=>Yii::$app->user->identity->id, 'id_job'=>$job['jobfinder_id']])?>" href="#">
						Apply for this job
					</a>
					<a class="btn btn-default" href="#">Apply via LinkedIn</a>
						<?php foreach ($all_bookmark as $bookmark) {
							if ($bookmark['bookmark_id_user'] == $sseeker['seek_id'] && $bookmark['bookmark_id_job'] == $job['jobfinder_id']) {
								$i++;
							}
						}?>
	                    <input type="hidden" name="jobfinder_id" value="<?=$job['jobfinder_id']?>">
						<button type="submit" class="btn pull-right" data-toggle="tooltip" data-original-title="Bookmark Job" 
						<?= $i > 0 ? 'disabled style="color: #e6b706;"' : ''?>>
							<i class="fa fa-heart"></i> Bookmark
						</button>
					<?php ActiveForm::end(); ?>
					<?php } else { ?>
						<?php if (Yii::$app->user->identity->id == $job['jobfinderIdCompany']['company_id_user']) {?>
						<a class="btn btn-primary modal-btn" href="#">
							Edit this job
						</a>
					<?php } 
						} 
					} ?>
				</div>
			</div>  
			<div class="noo-sidebar col-md-4">
				<div class="noo-sidebar-wrap">
					<div class="job-social clearfix">
						<span class="noo-social-title">
							Share this job
						</span>
						<a href="#share" class="noo-icon fa fa-facebook" title="Share on Facebook"></a>
						<a href="#share" class="noo-icon fa fa-twitter" title="Share on Twitter"></a>
						<a href="#share" class="noo-icon fa fa-google-plus" title="Share on Google+"></a>
						<a href="#share" class="noo-icon fa fa-pinterest" title="Share on Pinterest"></a>
						<a href="#share" class="noo-icon fa fa-linkedin" title="Share on LinkedIn"></a>
					</div>
					<div class="company-desc">
						<div class="company-header">
							<div class="company-featured">
								<a href="#">
									<?php if(is_null($sel_jobs['jobfinderIdCompany']['company_logo'])){?>
										<img width="300" height="300" src="<?=Yii::getAlias('@web')?>/template/images/company/about-img.png" alt="Villa Senang"/>
									<?php } else { ?>
										<img width="300" height="300" src="<?=Yii::getAlias('@web')?>/uploads/company/company_logo/<?=$sel_jobs['jobfinderIdCompany']['company_id'].'/'.$sel_jobs['jobfinderIdCompany']['company_logo']?>" alt="Villa Senang"/>
									<?php } ?>
								</a>
							</div>
							<h3 class="company-title">
								<a href="#">
									<?=$sel_jobs['jobfinderIdCompany']['company_name']?>
								</a>
							</h3>
						</div>
						<div class="company-info">
							<p style="text-align: justify;"><?=$sel_jobs['jobfinderIdCompany']['company_desc']?></p>
							<div class="job-social clearfix">
								<span class="noo-social-title">Connect with us</span>
								<a href="#" class="company_website" target="_blank">
									<span><?=$sel_jobs['jobfinderIdCompany']['company_website']?></span>
								</a>
								<a class="noo-icon fa fa-facebook" href="<?=$sel_jobs['jobfinderIdCompany']['company_facebook']?>" target="_blank"></a> 
								<a class="noo-icon fa fa-twitter" href="<?=$sel_jobs['jobfinderIdCompany']['company_twitter']?>" target="_blank"></a> 
								<a class="noo-icon fa fa-google-plus" href="<?=$sel_jobs['jobfinderIdCompany']['company_googleplus']?>" target="_blank"></a> 
								<a class="noo-icon fa fa-linkedin" href="<?=$sel_jobs['jobfinderIdCompany']['company_linkedin']?>" target="_blank"></a> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  
	</div>  
</div>