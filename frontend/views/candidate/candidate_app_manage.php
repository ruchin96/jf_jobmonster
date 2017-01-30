<?php
use yii\helpers\Url;
$this->title = 'Manage Applications';

echo $this->render('candidate_header', ['sel_seeker' => $sel_seeker]);
$seeker = $sel_seeker;
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
										<th>Applied job</th>
										<th class="hidden-xs hidden-sm">Applied Date</th>
										<th>Employer's message</th>
										<th class="text-center">Status</th>
									</tr>
								</thead>
								<tbody>
								<?php if(count($all_app)>0){?>
								<?php foreach ($all_app as $app) {?>
									<tr>
										<td class="w-25">
											<div class="loop-item-wrap">
												<div class="item-featured">
													<img alt="" src="<?=Yii::getAlias('@web')?>/template/images/company-logo.png">
												</div>
												<div class="loop-item-content">
													<h3 class="loop-item-title"><a href="<?=Url::to(['site/jobs-detail', 'id'=>$app['app_id_job']])?>"><?=$app['appIdJob']['jobfinder_jobname']?></a></h3>
												</div>
											</div>
										</td>
										<td class="hidden-xs hidden-sm w-15">
											<span><i class="fa fa-calendar"></i> <em><?= $formatter->asDate($app['app_createdat'], 'long')?></em></span>
										</td>
										<td>
											<?=$app['app_note_comp']?>
										</td>
										<td class="text-center">
											<span class="job-application-status <?=$app['app_status'] == 'p' ? 'job-application-status-pending' : ($app['app_status'] == 'r' ? 'job-application-status-rejected': 'job-application-status-active')?>">
												<?=$app['app_status'] == 'p' ? 'Pending' : ($app['app_status'] == 'r' ? 'Rejected': 'Active')?>
											</span>
										</td>
									</tr>
								<?php } ?>
								<?php } else { ?>
									<div class="well well-sm text-center bg-primary"><p class="widget-title "><i class="fa fa-warning"></i>  There's no Resume in <?=$seeker['seek_name']?></p></div>
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