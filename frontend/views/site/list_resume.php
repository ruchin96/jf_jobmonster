<?php
	use yii\helpers\Url;
	use yii\helpers\Html;

	$formatter = Yii::$app->formatter;
	// var_dump($pageCounter);die();
?>
<div class="noo-page-heading">
	<div class="container-boxed max parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title">Resume Listing </h1>
		</div>
	</div>
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
	<div class="container-boxed max offset main-content single-noo_job">
		<div class="row">
			<div class="noo-main col-md-8">
				<div class="resumes posts-loop">
					<div class="posts-loop-title">
						<h3>Resumes</h3>
					</div>
					<div class="posts-loop-content resume-table">
						<table class="table">
							<thead>
								<tr>
									<th>Candidate</th>
									<th>Resume Title</th>
									<th class="hidden-xs">Location</th>
									<th class="hidden-xs">Category</th>
								</tr>
							</thead>
							<tbody class="resume_nextajax-wrap">
								<?php foreach ($all_resume as $resume) {?>
								<tr>
									<td>
										<div class="loop-item-wrap">
											<div class="item-featured">
												<a href="#">
													<?=$resume['resIdSeek']['seek_picture'] == null ? 
									                    Html::img(Yii::$app->urlManager->baseUrl."/uploads/seeker/seek_picture/default/User.png", ['class'=>'photo','alt'=>'myImage','width'=>'40','height'=>'40']) 
									                    : 
									                    Html::img(Yii::$app->urlManager->baseUrl."/uploads/seeker/seek_picture/".$resume['resIdSeek']['seek_id']."/".$resume['resIdSeek']['seek_picture'], ['class'=>'photo','alt'=>'myImage','width'=>'40','height'=>'40'])
									                ?>
												</a>
											</div>
											<div class="loop-item-content">
												<h2 class="loop-item-title">
													<a href="<?=Url::to(['site/resume-detail','id'=>$resume['res_id']])?>"  class="link"><?=$resume['resIdSeek']['seek_name']?></a>
												</h2>
											</div>
										</div>
									</td>
									<td>
										<a href="#"><strong><?=$resume['res_title']?></strong></a>
									</td>
									<td class="hidden-xs">
										<i class="fa fa-map-marker"></i>&nbsp;<em><?=$resume['resJoblocation']['location_name']?></em>
									</td>
									<td class="hidden-xs"><strong><?=$resume['resIdJobcategory']['jobcategory_name']?></strong></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
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
					</div>
				</div>
			</div>  
			<div class="noo-sidebar col-md-4">
				<div class="noo-sidebar-wrap">
					<div class="widget widget_noo_advanced_search_widget">
						<h4 class="widget-title">Search</h4>
						<form class="widget-advanced-search" method="get">
							<div class="form-group">
								<label class="sr-only" for="search-keyword">keyword</label>
								<input type="text" class="form-control" id="search-keyword" name="res_title" placeholder="keyword" value=""/>
							</div>
							<div class="form-group">
								<label class="h5" for="search-category">Category</label>
								<div class="advance-search-form-control">
									<select name="res_category" class="form-control-chosen form-control" id="search-category">
										<option class="text-placeholder" value="">all category</option>
										<?php foreach ($all_jobcategory as $resumecategory) {?>
										<option value=""><?=$resumecategory['jobcategory_name']?></option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="h5">Total Year Experience</label>
								<div class="advance-search-form-control">
									<select name="res_id_yearexp" class="form-control-chosen form-control">
										<option class="text-placeholder" value="">All Total Year Experience </option>
										<?php foreach ($all_yexp as $yexp_list) {?>
										<option value=""><?=$yexp_list['yearexp_value']?> </option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="h5">Highest Degree Level</label>
								<div class="advance-search-form-control">
									<select name="res_id_hidegree" class="form-control-chosen form-control">
										<option class="text-placeholder" value="">All Highest Degree Level </option>
										<?php foreach ($all_hdegree as $hdegree_list) {?>
										<option value=""><?=$hdegree_list['hdegree_name']?> </option>
										<?php } ?>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="h5">Location</label>
								<div class="advance-search-form-control">
									<select name="res_joblocation" class="form-control-chosen form-control">
										<option class="text-placeholder" value="">all location</option>
										<<?php foreach ($joblocation as $loc) {
                                            echo '<option value="'.$loc['location_id'].'">'.$loc['location_name'].'</option>';
                                        }?>
									</select>
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-search-submit">Search</button>
						</form>
					</div>
					<div class="widget noo-resume-count-widget">
						<ul>
							<li>
								<a href="#">Resumes</a>
								<p class="jobs-count"><?=count(2)?></p>
							</li>
						</ul>
					</div>
					<div class="widget noo-resume-category-widget">
						<h4 class="widget-title">Resume Categories</h4>
						<ul>
							<?php foreach ($all_jobcategory as $resumecategory) {?>
							<li><a href="#"></a><?=$resumecategory['jobcategory_name']?></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>  
	</div>  
</div>