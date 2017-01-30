<?php
use yii\helpers\Url;
$this->title = 'Manage Job';

$formatter = Yii::$app->formatter;

echo $this->render('company_header',['sel_company' => $sel_company]);
?>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-12">
				<div class="member-manage">
					<h3>You've posted <?=count($all_job)?> job(s)</h3>
					<em><strong>Note:</strong> Expired listings will be automatically removed after 30 days.</em>
					<form method="post">
						<div class="member-manage-toolbar top-toolbar hidden-xs clearfix">
							<div class="bulk-actions clearfix">
								<strong>Action:</strong>
								<div class="form-control-flat">
									<select name="action">
										<option selected="selected" value="">-Select Action-</option>
										<option value="">Publish</option>
										<option value="">Unpublish</option>
										<option value="">Delete</option>
									</select>
									<i class="fa fa-caret-down"></i>
								</div>
								<button type="button" class="btn btn-primary">Go</button>
								<a href="<?=Url::to(['company/create-job'])?>" class="btn btn-primary pull-right">Create a new job</a>
							</div>
						</div>
						<div class="member-manage-table">
							<table class="table">
								<thead>
									<tr>
										<th class="check-column">
											<div class="form-control-flat">
												<label class="checkbox">
													<input type="checkbox"><i></i>
												</label>
											</div>
										</th>
										<th>Title</th>
										<th class="hidden-xs">&nbsp;</th>
										<th class="hidden-xs hidden-sm">Location</th>
										<th class="hidden-xs">Closing</th>
										<th class="text-center">Apps</th>
										<th class="text-center hidden-xs">Status</th>
										<th class="text-center hidden-xs">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($all_job as $job) {?>
									<tr>
										<td class="check-column">
											<div class="form-control-flat">
												<label class="checkbox">
													<input type="checkbox" name="jodfinder_id[]" value="<?=$job['jobfinder_id']?>">
													<i></i>
												</label>
											</div>
										</td>
										<td>
											<a href="#"><strong><?=$job['jobfinder_jobname']?></strong></a>
										</td>
										<td class="hidden-xs">
											<a href="#">
												<span class="noo-job-feature not-featured" data-toggle="tooltip"  title="Set Featured">
													<i class="fa fa-star-o"></i>
												</span>
											</a>
										</td>
										<td class="hidden-xs hidden-sm">
											<i class="fa fa-map-marker"></i>&nbsp;<em><?=$job['jobfinder_location']?></em>
										</td>
										<td class="job-manage-expires hidden-xs">
											<span><i class="fa fa-calendar"></i>&nbsp;<em><?= $formatter->asDate($job['jobfinder_closedate'], 'long')?></em></span>
										</td>
										<td class="job-manage-app text-center">
											<span>1</span>
										</td>
										<td class="text-center">
											<span class="job-application-status job-application-status-publish">
												Active
											</span>
										</td>
										<td class="member-manage-actions hidden-xs text-center">
											<a href="<?=Url::to(['company/update-job', 'id'=>$job['jobfinder_id']])?>" class="member-manage-action" data-toggle="tooltip" title="Edit Job">
												<i class="fa fa-pencil"></i>
											</a>
											<a href="#" class="member-manage-action action-delete modal-btn" data-url="<?=Url::to(['company/modal-delete-job', 'id'=>$job['jobfinder_id']])?>"  data-toggle="tooltip" title="Delete Job">
												<i class="fa fa-trash-o"></i>
											</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="member-manage-toolbar bottom-toolbar hidden-xs clearfix">
							<div class="bulk-actions clearfix">
								<strong>Action:</strong>
								<div class="form-control-flat">
									<select name="action2">
										<option selected="selected" value="">-Select Action-</option>
										<option value="">Publish</option>
										<option value="">Unpublish</option>
										<option value="">Delete</option>
									</select>
									<i class="fa fa-caret-down"></i>
								</div>
								<button type="button" class="btn btn-primary">Go</button>
							</div>
						</div>
					</form>
				</div>
			</div>  
		</div> 
	</div> 
</div>