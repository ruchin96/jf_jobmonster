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
						<?php } else { ?>
						<div class="posts-loop-content result-table">
							<table class="table">
								<thead>
									<tr>
										<th>Candidate</th>
										<th>result Title</th>
										<th class="hidden-xs">Location</th>
										<th class="hidden-xs">Category</th>
									</tr>
								</thead>
								<tbody class="result_nextajax-wrap">
									<?php foreach ($resultSearch as $result) {?>
									<tr>
										<td>
											<div class="loop-item-wrap">
												<div class="item-featured">
													<a href="#">
														<?=$result['resIdSeek']['seek_picture'] == null ? 
										                    Html::img(Yii::$app->urlManager->baseUrl."/uploads/seeker/seek_picture/default/User.png", ['class'=>'photo','alt'=>'myImage','width'=>'40','height'=>'40']) 
										                    : 
										                    Html::img(Yii::$app->urlManager->baseUrl."/uploads/seeker/seek_picture/".$result['resIdSeek']['seek_id']."/".$result['resIdSeek']['seek_picture'], ['class'=>'photo','alt'=>'myImage','width'=>'40','height'=>'40'])
										                ?>
													</a>
												</div>
												<div class="loop-item-content">
													<h2 class="loop-item-title">
														<a href="<?=Url::to(['site/result-detail','id'=>$result['res_id']])?>"  class="link"><?=$result['resIdSeek']['seek_name']?></a>
													</h2>
												</div>
											</div>
										</td>
										<td>
											<a href="#"><strong><?=$result['res_title']?></strong></a>
										</td>
										<td class="hidden-xs">
											<i class="fa fa-map-marker"></i>&nbsp;<em><?=$result['resJoblocation']['location_name']?></em>
										</td>
										<td class="hidden-xs"><strong><?=$result['resIdJobcategory']['jobcategory_name']?></strong></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<?php } ?>
					</div>
					<!-- <div class="loadmore-action">
						<a href="#" class="btn btn-default btn-block btn-loadmore">Load More</a>
					</div> -->
				</div>
			</div>
		</div> 
	</div> 
</div> 
