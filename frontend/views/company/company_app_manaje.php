<?php
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Manage Applications';

echo $this->render('company_header',['sel_company' => $sel_company]);
$formatter = Yii::$app->formatter;
?>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-12">
				<div class="member-manage">
					<h3>You've applied <?=count($all_app)?> job</h3>
					<form>
						<div class="member-manage-table">
							<table class="table">
								<thead>
									<tr>
										<th>Applied Seeker</th>
										<th>Applied Job</th>
										<th class="hidden-xs hidden-sm">Applied Date</th>
										<th>Seeker's message</th>
										<th class="text-center">Status</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($all_app as $app) {?>
									<tr>
										<td class="w-25">
											<div class="loop-item-wrap">
												<div class="item-featured">
													<?=$app['seek_picture'] == null ? 
								                    Html::img(Yii::$app->urlManager->baseUrl."/uploads/seeker/seek_picture/default/User.png", ['class'=>'photo','alt'=>'myImage','width'=>'40','height'=>'40']) 
								                    : 
								                    Html::img(Yii::$app->urlManager->baseUrl."/uploads/seeker/seek_picture/".$app['seek_id']."/".$app['seek_picture'], ['class'=>'photo','alt'=>'myImage','width'=>'40','height'=>'40'])
								                    ?>
												</div>
												<div class="loop-item-content">
													<h3 class="loop-item-title"><a href="#"><?=$app['seek_name']?></a></h3>
												</div>
											</div>
										</td>
										</td>
										<td class="hidden-xs hidden-sm w-15">
											<a href="<?=Url::to(['site/resume-detail'])?>" class="btn btn-info btn-xs link">Show Resume</a>
										</td>
										<td class="hidden-xs hidden-sm w-15">
											<div class="loop-item-wrap">
												<div class="loop-item-content">
													<h3 class="loop-item-title"><a href="#"><?=$app['jobfinder_jobname']?></a></h3>
												</div>
											</div>
										<td class="hidden-xs hidden-sm w-15">
											<span><i class="fa fa-calendar"></i> <em><?= $formatter->asDate($app['app_createdat'], 'long')?></em></span>
										</td>
										<td>
											<?=$app['app_note']?>
										</td>
										<td class="text-center">
											<span class="job-application-status <?=$app['app_status'] == 'p' ? 'job-application-status-pending' : ($app['app_status'] == 'r' ? 'job-application-status-rejected': 'job-application-status-active')?>">
												<?=$app['app_status'] == 'p' ? 'Pending' : ($app['app_status'] == 'r' ? 'Rejected': 'Active')?>
											</span>
										</td>
										<td class="text-center">
											<a href="#" data-url="<?=Url::to(['company/modal-accept-app', 'id'=>$app['app_id']])?>" class="btn btn-success btn-xs modal-btn">Accepted</a><br>
											<a href="#"  data-url="<?=Url::to(['company/modal-reject-app', 'id'=>$app['app_id']])?>" class="btn btn-danger btn-xs modal-btn">Rejected</a><br>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="member-manage-toolbar bottom-toolbar clearfix">
							<div class="member-manage-page pull-right"></div>
						</div>
					</form>
				</div>
			</div>  
		</div> 
	</div> 
</div>