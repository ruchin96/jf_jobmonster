<?php
	use yii\helpers\Url;
	$formatter = Yii::$app->formatter;
	// var_dump($pageCounter);die();
?>
<div class="noo-page-heading">
	<div class="container-boxed max parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title">Job Vacancy </h1>
		</div>
	</div> 
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-8">
				<div class="jobs posts-loop">
					<div class="posts-loop-title">
						<h3>Latest Jobs</h3>
					</div>
					<div class="posts-loop-content">
						<?php if (count($all_job)<1) {?>
							<div class="well well-sm text-center bg-primary"><p class="widget-title"><i class="fa fa-warning"></i>  There's no Job Vacancy in Our System</p></div>
						<?php } else { foreach ($all_job as $job_list) { ?>
						<article class="noo_job hentry">
							<div class="loop-item-wrap">
								<div class="item-featured">
									<a href="#">
									<?php if(is_null($job_list['jobfinderIdCompany']['company_logo'])){?>
										<img width="222" height="131" src="<?=Yii::getAlias('@web')?>/template/images/company/about-img.png" alt="Villa Senang"/>
									<?php } else { ?>
										<img width="222" height="131" src="<?=Yii::getAlias('@web')?>/uploads/company/company_logo/<?=$job_list['jobfinderIdCompany']['company_id'].'/'.$job_list['jobfinderIdCompany']['company_logo']?>" alt="Villa Senang"/>
									<?php } ?>
									</a>
								</div>
								<div class="loop-item-content">
									<h2 class="loop-item-title">
										<a href="#"><?=$job_list['jobfinder_jobname']?></a>
									</h2>
									<p class="content-meta">
										<span class="job-company">
											<a href="#"><?=$job_list['jobfinderIdCompany']['company_name']?></a>
										</span>
										<span class="job-type <?=$job_list['jobfinder_timecategory'] == 1 ? 'freelencer' : ($job_list['jobfinder_timecategory'] == 2 ? 'part-time': ($job_list['jobfinder_timecategory'] == 3 ? 'full-time' : 'contract'))?>">
											<a href="#">
												<i class="fa fa-bookmark"></i><?=$job_list['jobfinderTimecategory']['timecategory_name']?>
											</a>
										</span>
										<span class="job-location">
											<i class="fa fa-map-marker"></i>
											<a href="#"><em><?=$job_list['jobfinderLocation']['location_name']?></em></a>
										</span>
										<span>
											<time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
												<i class="fa fa-calendar"></i>
												<?= $formatter->asDate($job_list['jobfinder_createdat'], 'long')?>
												 - <?= $formatter->asDate($job_list['jobfinder_closedate'], 'long')?>
											</time>
										</span>
									</p>
								</div>
								<div class="show-view-more">
									<li style="list-style: none;">
										<a class="btn btn-primary link" href="<?=Url::to(['jobs-detail','id'=>$job_list['jobfinder_id']])?>">View more </a>
									</li>
								</div>
							</div>
						</article>
						<?php } ?>
					</div>
					<!-- <div class="loadmore-action">
						<a href="#" class="btn btn-default btn-block btn-loadmore">Load More</a>
					</div> -->
					<div class="pagination list-center">
						<li>
						<?php for ($pg=1; $pg <= $pageTotal ; $pg++) { 
							if ($pg == $pageCounter) {?>
							<span class='page-numbers current'><?=$pg?></span>
						<?php } else { ?>
							<a class='page-numbers link' href="<?=Url::to(['site/joblist','page'=>$pg])?>"><?=$pg?></a>
						<?php } } ?>
							<a class="next page-numbers link" href="<?=Url::to(['site/joblist','page'=>$pageTotal])?>">
								<i class="fa fa-long-arrow-right"></i>
							</a>
						</li>
						<?php } ?>
					</div>
				</div>
			</div>  
			<div class="noo-sidebar col-md-4">
				<div class="noo-sidebar-wrap">
					<?=$this->render('_form_job_search', [
	                    'all_job' => $all_job,
	                    'pageCounter' => $pageCounter,
	                    'pageTotal' => $pageTotal,
	                ]);?>
				</div>
			</div> 
		</div> 
	</div> 
</div> 