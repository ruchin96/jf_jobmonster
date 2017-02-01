<?php
use yii\helpers\Url;
use yii\helpers\Html;

$formatter = Yii::$app->formatter;
?>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-12">
				<div class="jobs posts-loop">
					<div class="posts-loop-title">
						<h3>Result Jobs</h3>
					</div>
					<div class="posts-loop-content">
						<?php if (count($resultSearch)<1) {?>
							<div class="well well-sm text-center bg-primary"><p class="widget-title"><i class="fa fa-warning"></i>  There's no Job Vacancy in Our System</p></div>
						<?php } else { foreach ($resultSearch as $result) {?>
						<article class="noo_job hentry">
							<div class="loop-item-wrap">
								<div class="item-featured">
									<a href="#">
										<?php if(is_null($result['jobfinderIdCompany']['company_logo'])){?>
											<img width="222" height="131" src="<?=Yii::getAlias('@web')?>/template/images/company/about-img.png" alt="Villa Senang"/>
										<?php } else { ?>
											<img width="222" height="131" src="<?=Yii::getAlias('@web')?>/uploads/company/company_logo/<?=$result['jobfinderIdCompany']['company_id'].'/'.$result['jobfinderIdCompany']['company_logo']?>" alt="Villa Senang"/>
										<?php } ?>
									</a>
								</div>
								<div class="loop-item-content">
									<h2 class="loop-item-title">
										<?=$result['jobfinder_jobname']?>
									</h2>
									<p class="content-meta">
										<span class="job-company">
											<a href="#"><?=$result['jobfinderIdCompany']['company_name']?></a>
										</span>
										<span class="job-type <?=$result['jobfinder_timecategory'] == 1 ? 'freelencer' : ($result['jobfinder_timecategory'] == 2 ? 'part-time': ($result['jobfinder_timecategory'] == 3 ? 'full-time' : 'contract'))?>">
											<a href="#">
												<i class="fa fa-bookmark"></i><?=$result['jobfinderTimecategory']['timecategory_name']?>
											</a>
										</span>
										<span class="job-location">
											<i class="fa fa-map-marker"></i>
											<a href="#"><em><?=$result['jobfinderLocation']['location_name']?></em></a>
										</span>
										<span>
											<time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
												<i class="fa fa-calendar"></i>
												<?= $formatter->asDate($result['jobfinder_createdat'], 'long')?>
												 - <?= $formatter->asDate($result['jobfinder_closedate'], 'long')?>
											</time>
										</span>
									</p>
								</div>
								<div class="show-view-more">
									<a class="btn btn-primary link" href="<?=Url::to(['site/jobs-detail','id'=>$result['jobfinder_id']])?>">View more </a>
								</div>
							</div>
						</article>
						<?php } } ?>
					</div>
					<!-- <div class="loadmore-action">
						<a href="#" class="btn btn-default btn-block btn-loadmore">Load More</a>
					</div> -->
				</div>
			</div>
		</div> 
	</div> 
</div> 