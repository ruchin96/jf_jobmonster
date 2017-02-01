<?php
use yii\helpers\Url;
use yii\helpers\Html;
// var_dump($resultSearch->params);die();
?>
<div class="noo-page-heading">
	<div class="container-boxed max parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title">Result Jobs Search</h1>
		</div>
	</div> 
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-12">
				<div class="jobs posts-loop">
					<div class="posts-loop-title">
						<h3>Result Jobs</h3>
					</div>
					<div class="posts-loop-content">
						<?php foreach ($resultSearch as $result) {?>
						<article class="noo_job hentry">
							<div class="loop-item-wrap">
								<div class="item-featured">
									<a href="#">
										<img width="222" height="131" src="images/company/about-img.png" alt="Villa Senang"/>
									</a>
								</div>
								<div class="loop-item-content">
									<h2 class="loop-item-title">
										<?=$result['jobfinder_jobname']?>
									</h2>
									<p class="content-meta">
										<span class="job-company">
											<a href="#">Villa Senang</a>
										</span>
										<span class="job-type contract">
											<a href="#">
												<i class="fa fa-bookmark"></i>Contract
											</a>
										</span>
										<span class="job-location">
											<i class="fa fa-map-marker"></i>
											<a href="#"><em><?=$result['jobfinder_location']?></em></a>
										</span>
										<span>
											<time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
												<i class="fa fa-calendar"></i>
												Aug 18, 2015 - Aug 31, 2015
											</time>
										</span>
									</p>
								</div>
								<div class="show-view-more">
									<a class="btn btn-primary link" href="<?=Url::to(['site/jobs-detail','id'=>$result['jobfinder_id']])?>">View more </a>
								</div>
							</div>
						</article>
						<?php } ?>
					</div>
					<div class="loadmore-action">
						<a href="#" class="btn btn-default btn-block btn-loadmore">Load More</a>
					</div>
				</div>
			</div>
		</div> 
	</div> 
</div> 