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
						<h3>Result Companies</h3>
					</div>
					<div class="posts-loop-content">
						<?php if (count($resultSearch)<1) {?>
							<div class="well well-sm text-center bg-primary"><p class="widget-title"><i class="fa fa-warning"></i>  There's no Job Vacancy in Our System</p></div>
						<?php } else { foreach ($resultSearch as $result) {?>
						<article class="noo_job hentry">
							<div class="loop-item-wrap">
								<div class="item-featured">
									<a href="#">
										<?php if(is_null($result['company_logo'])){?>
											<img width="300" height="300" src="<?=Yii::getAlias('@web')?>/template/images/company/about-img.png" alt="Villa Senang"/>
										<?php } else { ?>
											<img width="300" height="300" src="<?=Yii::getAlias('@web')?>/uploads/company/company_logo/<?=$result['company_id'].'/'.$result['company_logo']?>" alt="Villa Senang"/>
										<?php } ?>
									</a>
								</div>
								<div class="loop-item-content">
									<h2 class="loop-item-title">
										<a href="#"><?=$result['company_name']?></a>
									</h2>
									<p class="content-meta">
										<span class="job-company">
											<a href="#"><?=$result['company_name']?></a>
										</span>
										<span class="job-type contract">
											<a href="#">
												<i class="fa fa-bookmark"></i>Indonesia
											</a>
										</span>
										<span class="job-location">
											<i class="fa fa-map-marker"></i>
											<a href="#"><em>Kuta, Indonesia</em></a>
										</span>
										<span>
											<time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
												<i class="fa fa-calendar"></i>
												Aug 18, 2015
											</time>
										</span>
									</p>
								</div>
								<div class="show-view-more">
									<a class="btn btn-primary" href="<?=Url::to(['site/company-detail','id' => $result['company_id']])?>" class="link">View more </a>
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
