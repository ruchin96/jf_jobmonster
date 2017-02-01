<?php
use yii\helpers\Url;
use yii\helpers\Html;

$resume = $sel_resume;
?>
<div class="noo-page-heading">
	<div class="container-boxed max parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title">Resume Detail <span class="count">692 views</span></h1>
		</div>
	</div>
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
	<div class="container-boxed max offset main-content">
		<div class="row">
			<div class="noo-main col-md-12">
				<article class="resume">
					<div class="resume-candidate-profile">
						<div class="row">
							<div class="col-sm-3 profile-avatar">
								<?=$resume['resIdSeek']['seek_picture'] == null ? 
				                    Html::img(Yii::$app->urlManager->baseUrl."/uploads/seeker/seek_picture/default/User.png", ['class'=>'photo','alt'=>'myImage','width'=>'160','height'=>'160']) 
				                    : 
				                    Html::img(Yii::$app->urlManager->baseUrl."/uploads/seeker/seek_picture/".$resume['resIdSeek']['seek_id']."/".$resume['resIdSeek']['seek_picture'], ['class'=>'photo','alt'=>'myImage','width'=>'160','height'=>'160'])
				                ?>
							</div>
							<div class="col-sm-9 candidate-detail">
								<div class="candidate-title clearfix">
									<h2><?=$resume['resIdSeek']['seek_name']?></h2>
									<a href="<?=Url::to(['site/resume-print', 'id'=>$resume['res_id']])?>" class="btn-primary btn-sm" target="_blank"><i class="fa fa-print"></i>Print</a>
								</div>
								<div class="candidate-info">
									<div class="row">
										<div class="col-sm-6">
											<i class="fa fa-suitcase text-primary"></i>
											&nbsp;&nbsp;<?=$resume['resIdSeek']['seek_curr_job']?>
										</div>
										<div class="col-sm-6">
											<i class="fa fa-map-marker text-primary"></i>
											&nbsp;&nbsp;<?=$resume['resIdSeek']['seek_address']?>
										</div>
										<div class="col-sm-6">
											<i class="fa fa-birthday-cake text-primary"></i>
											&nbsp;&nbsp;<?=$resume['resIdSeek']['seek_birthday']?>
										</div>
										<div class="col-sm-6">
											<i class="fa fa-phone text-primary"></i>
											&nbsp;&nbsp;<?=$resume['resIdSeek']['seek_telp']?>
										</div>
										<div class="col-sm-6 pull-right">
											<a href="mailto:suresh.savliya@gmail.com">
												<i class="fa fa-envelope text-primary"></i>
												&nbsp;&nbsp;<?=$resume['resIdSeek']['seekIdUser']['email']?>
											</a>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 pull-left"></div>
										<div class="candidate-social col-sm-6 pull-right" >
											<a class="noo-icon fa fa-facebook" href="<?=$resume['resIdSeek']['seek_facebook']?>" target="_blank"></a>
											<a class="noo-icon fa fa-twitter" href="<?=$resume['resIdSeek']['seek_twitter']?>" target="_blank"></a>
											<a class="noo-icon fa fa-linkedin" href="<?=$resume['resIdSeek']['seek_linkedin']?>" target="_blank"></a>
											<a class="noo-icon fa fa-behance" href="<?=$resume['resIdSeek']['seek_behance']?>" target="_blank"></a>
											<a class="noo-icon fa fa-instagram" href="<?=$resume['resIdSeek']['seek_instagram']?>" target="_blank"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr/>
					<div class="resume-content">
						<div class="row">
							<div class="col-md-12">
								<div class="resume-desc">
									<div class="resume-general row">
										<div class="col-sm-3">
											<h3 class="title-general">
												<span>General Infomation</span>
											</h3>										
										</div>
										<div class="col-sm-9">
											<ul>
												<li>
													<span>Language</span>
													<?=$resume['resIdLanguage']['language_name']?>
												</li>
												<li>
													<span>Highest Degree Level</span>
													<?=$resume['resIdHidegree']['hdegree_name']?>
												</li>
												<li>
													<span>Total Year Experience</span>
													<?=$resume['resIdYearexp']['yearexp_value']?>
												</li>
												<li>
													<span>Job Category</span>
													<?=$resume['resIdJobcategory']['jobcategory_name']?>
												</li>
												<li>
													<span>Expected Job Level</span>
													<?=$resume['resIdJoblevel']['explevel_name']?>
												</li>
												<li>
													<span>Job Location</span>
													<?=$resume['res_joblocation']?>
												</li>
											</ul>
										</div>
										<div class="col-sm-12">
											<p>
												<?=$resume['res_selfdesc']?>
											</p>
										</div>
									</div>
									<div class="resume-timeline row">
										<div class="col-md-3 col-sm-12">
											<h3 class="title-general">
												<span>Education</span>
											</h3>
										</div>
										<div class="col-md-9 col-sm-12">
											<div class="timeline-container education">
												<?php
													$numItems = count($all_edu);
													$i = 0;
												?>
												<?php foreach ($all_edu as $edu) {?>
												<div class="timeline-wrapper <?=(++$i === $numItems) ? 'last' : ''?>">
													<div class="timeline-time">
														<span><?=date('Y', strtotime($edu['edu_start']))?> - <?=date('Y', strtotime($edu['edu_end']))?></span>
													</div>
													<dl class="timeline-series">
														<dt class="timeline-event">
															<a>
																<?=$edu['edu_sname']?><span><?=$edu['edu_qualify']?></span>
															</a>
														</dt>
														<dd class="timeline-event-content">
															<p><?=$edu['edu_note']?>.</p>
															<br class="clear">
														</dd>
													</dl>
												</div>
												<?php } ?>
												
											</div>
										</div>
									</div>
									<div class="resume-timeline row">
										<div class="col-md-3 col-sm-12">
											<h3 class="title-general">
												<span>Work Experience</span>
											</h3>
										</div>
										<div class="col-md-9 col-sm-12">
											<div class="timeline-container experience">
												<?php
													$numItems = count($all_work);
													$i = 0;
												?>
												<?php foreach ($all_work as $work) {?>
												<div class="timeline-wrapper <?=(++$i === $numItems) ? 'last' : ''?>">
													<div class="timeline-time">
														<span><?=date('Y', strtotime($work['work_start']))?> - <?=date('Y', strtotime($work['work_end']))?></span>
													</div>
													<dl class="timeline-series">
														<dt class="timeline-event">
															<a>
																<?=$work['work_company']?><span class="tick tick-after"><?=$work['work_jobtitle']?></span>
															</a>
														</dt>
														<dd class="timeline-event-content">
															<p>
																<?=$work['work_note']?>
															</p>
															<br class="clear">
														</dd>
													</dl>
												</div>
												<?php } ?>
											</div>
										</div>
									</div>
									<div class="resume-timeline row">
										<div class="col-md-3 col-sm-12">
											<h3 class="title-general">
												<span>Summary of Skills</span>
											</h3>
										</div>
										<div class="col-md-9 col-sm-12">
											<div class="skill">
												<?php foreach ($all_skill as $skill) {?>
												<div class="pregress-bar clearfix">
													<div class="progress_title">
														<span><?=$skill['skill_name']?></span>
													</div>
													<div class="progress">
														<div role="progressbar" aria-valuemax="100" aria-valuemin="0" class="progress-bar progress-bar-bg" aria-valuenow="90" style="width: <?=$skill['skill_prosentase']?>%;">
															<div class="progress_label"><span><?=$skill['skill_prosentase']?></span>%</div>
														</div>
													</div>
												</div>
												<?php } ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>  
	</div>  
</div>