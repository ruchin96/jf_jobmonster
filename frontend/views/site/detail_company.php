<?php
use yii\helpers\Url;
use yii\helpers\Html;
$company = $sel_company;
$this->title = "Company ".$company['company_name'];
?>
<div class="noo-page-heading">
	<div class="container-boxed max parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title"><?=$company['company_name']?> <span class="count">385 views</span> </h1>
		</div>
	</div>
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
	<div class="container-boxed max offset main-content single-noo_job">
		<div class="row">
			<div class="noo-main col-md-8">
				<div class="job-listing">
					<div class="jobs posts-loop">
						<div class="posts-loop-title">
							<h3><?=$company['company_name']?> has posted <span class="text-primary"><?=count($countJobs)?></span> jobs</h3>
						</div>
						<div class="posts-loop-content">
							<!--foreach here-->
							<?php if(count($com_jobs)>0){?>
								<?php foreach ($com_jobs as $jobs) {?>
								<article class="noo_job hentry">
									<div class="loop-item-wrap">
										<div class="item-featured">
											<a href="#">
												<?php if(is_null($company['company_logo'])){?>
													<img width="300" height="300" src="<?=Yii::getAlias('@web')?>/template/images/company/about-img.png" alt="Villa Senang"/>
												<?php } else { ?>
													<img width="300" height="300" src="<?=Yii::getAlias('@web')?>/uploads/company/company_logo/<?=$company['company_id'].'/'.$company['company_logo']?>" alt="Villa Senang"/>
												<?php } ?>
											</a>
										</div>
										<div class="loop-item-content">
											<h2 class="loop-item-title">
												<a href="#"><?=$jobs['jobfinder_jobname']?></a>
											</h2>
											<p class="content-meta">
												<span class="job-company">
													<a href="#">Wild West Company</a>
												</span>
												<span class="job-type <?=($jobs['jobfinder_timecategory'] == 1) ? 'freelencer' : ($jobs['jobfinder_timecategory'] == 2 ? 'part-time': ($jobs['jobfinder_timecategory'] == 3 ? 'full-time' : 'contract'))?>">
													<a href="#">
														<i class="fa fa-bookmark"></i><?=$jobs['jobfinderTimecategory']['timecategory_name']?>
													</a>
												</span>
												<span class="job-location">
													<i class="fa fa-map-marker"></i>
													<a href="#"><em><?=$jobs['jobfinderLocation']['location_name']?></em></a>
												</span>
												<span>
													<time class="entry-date" datetime="2015-08-10T09:46:53+00:00">
														<i class="fa fa-calendar"></i>
														Aug 10, 2015 - Aug 24, 2015
													</time>
												</span>
											</p>
										</div>
										<div class="show-view-more">
											<a class="btn btn-primary link" href="<?=Url::to(['site/jobs-detail','id'=>$jobs['jobfinder_id']])?>">View more </a>
										</div>
									</div>
								</article>
								<?php } ?>
								<div class="pagination list-center">
									<?php for ($pg=1; $pg <= $pageTotal ; $pg++) { 
										if ($pg == $pageCounter) {?>
										<span class='page-numbers current'><?=$pg?></span>
									<?php } else { ?>
										<a class='page-numbers link' href="<?=Url::to(['site/company-detail','id'=>$company['company_id'],'page'=>$pg])?>"><?=$pg?></a>
									<?php } } ?>
									<a class="next page-numbers link" href="<?=Url::to(['site/company-detail','id'=>$company['company_id'],'page'=>$pageTotal])?>">
										<i class="fa fa-long-arrow-right"></i>
									</a>
								</div>
							<?php } else { ?>
								<div class="well well-sm text-center bg-primary"><p class="widget-title "><i class="fa fa-warning"></i>  There's no Jobs in <?=$company['company_name']?></p></div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>  
			<div class="noo-sidebar col-md-4">
				<div class="noo-sidebar-wrap">
					<div class="company-desc">
						<div class="company-header">
							<div class="company-featured">
								<a href="#">
									<?php if(is_null($company['company_logo'])){?>
										<img width="300" height="300" src="<?=Yii::getAlias('@web')?>/template/images/company/about-img.png" alt="Villa Senang"/>
									<?php } else { ?>
										<img width="300" height="300" src="<?=Yii::getAlias('@web')?>/uploads/company/company_logo/<?=$company['company_id'].'/'.$company['company_logo']?>" alt="Villa Senang"/>
									<?php } ?>
								</a>
							</div>
							<h3 class="company-title">
								<a href="#"><?=$company['company_name']?></a>
							</h3>
						</div>
						<div class="company-info">
							<?=$company['company_desc']?>
							<div class="job-social clearfix">
								<span class="noo-social-title">Connect with us</span>
								<a href="http://<?=$company['company_website']?>" class="company_website" target="_blank">
									<span><?=$company['company_website']?></span>
								</a>
								<a class="noo-icon fa fa-facebook" href="<?=$company['company_facebook']?>" target="_blank"></a> 
								<a class="noo-icon fa fa-twitter" href="<?=$company['company_twitter']?>" target="_blank"></a> 
								<a class="noo-icon fa fa-google-plus" href="<?=$company['company_googleplus']?>" target="_blank"></a> 
								<a class="noo-icon fa fa-linkedin" href="<?=$company['company_linkedin']?>" target="_blank"></a> 
								<a class="noo-icon fa fa-instagram" href="#" target="_blank"></a> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>  
	</div>  
</div>