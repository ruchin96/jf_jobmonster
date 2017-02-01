<?php
use yii\helpers\Url;
use yii\helpers\Html;

$this->title = "Job Monster - Companies"
?>
<div class="contain">
	<div class="noo-page-heading">
		<div class="container-boxed max parallax-content">
			<div class="page-heading-info">
				<h1 class="page-title">Companies </h1>
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
							<h3>Latest Company's Join</h3>
						</div>
						<div class="posts-loop-content">
						<?php if (count($all_company)<1) {?>
							<div class="well well-sm text-center bg-primary"><p class="widget-title"><i class="fa fa-warning"></i>  There's no Company in Our System</p></div>
						<?php } else { foreach ($all_company as $company_list) { ?>
							<article class="noo_job hentry">
								<div class="loop-item-wrap">
									<div class="item-featured">
										<a href="#">
											<?php if(is_null($company_list['company_logo'])){?>
												<img width="300" height="300" src="<?=Yii::getAlias('@web')?>/template/images/company/about-img.png" alt="Villa Senang"/>
											<?php } else { ?>
												<img width="300" height="300" src="<?=Yii::getAlias('@web')?>/uploads/company/company_logo/<?=$company_list['company_id'].'/'.$company_list['company_logo']?>" alt="Villa Senang"/>
											<?php } ?>
										</a>
									</div>
									<div class="loop-item-content">
										<h2 class="loop-item-title">
											<a href="#"><?=$company_list['company_name']?></a>
										</h2>
										<p class="content-meta">
											<span class="job-company">
												<a href="#"><?=$company_list['company_name']?></a>
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
										<a class="btn btn-primary" href="<?=Url::to(['site/company-detail','id' => $company_list['company_id']])?>" class="link">View more </a>
									</div>
								</div>
							</article>
							<?php } ?>
						</div>
						<div class="pagination list-center">
							<li>
							<?php for ($pg=1; $pg <= $pageTotal ; $pg++) { 
								if ($pg == $pageCounter) {?>
								<span class='page-numbers current'><?=$pg?></span>
							<?php } else { ?>
								<a class='page-numbers link' href="<?=Url::to(['site/resumelist','page'=>$pg])?>"><?=$pg?></a>
							<?php } } ?>
								<a class="next page-numbers link" href="<?=Url::to(['site/resumelist','page'=>$pageTotal])?>">
									<i class="fa fa-long-arrow-right"></i>
								</a>
							</li>
							<?php } ?>
						</div>
					</div>
				</div>  
				<div class=" noo-sidebar col-md-4">
					<div class="noo-sidebar-wrap">
						<div class="widget noo-job-search-widget">
							<h3 class="widget-title">Search</h3>
							<form class="form-horizontal noo-job-search">
								<label class="sr-only" for="s">Search for:</label>
								<input type="search" id="s" class="form-control" placeholder="Search Company&hellip;" value="" name="s" title="Search for:"/>
								<input type="submit" class="hidden"/>
							</form>
						</div>
						<div class="widget noo-job-count-widget">
							<ul>
								<li>
									<a href="#">Companies</a>
									<p class="jobs-count"><?=count($all_company)?></p>
								</li>
								<li>
									<a href="#">Available Jobs</a>
									<p class="jobs-count">18</p></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</div> 
	</div> 
</div>