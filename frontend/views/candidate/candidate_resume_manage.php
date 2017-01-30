<?php
use yii\helpers\Url;
$this->title = 'Manage Resume';

$seeker = $sel_seeker;

echo $this->render('candidate_header', ['sel_seeker' => $sel_seeker]);
?>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-12">
				<div class="member-manage">
					<h3>You've saved <span class="text-primary"><?=count($all_resume)?></span> resume</h3>
					<em><strong>Note:</strong> Only 1 resume is publicly viewable/searchable.</em>
					<form>
						<div class="member-manage-table">
							<table class="table">
								<thead>
									<tr>
										<th>Title</th>
										<th class="hidden-xs text-center">Viewable</th>
										<th class="hidden-xs">Category</th>
										<th class="hidden-xs hidden-sm">Location</th>
										<th class="hidden-xs hidden-sm">Date Modified</th>
										<th class="hidden-xs hidden-sm">Detail</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php if(count($all_resume)>0){?>
								<?php foreach ($all_resume as $resume) {?>
									<tr>
										<td class="title-col">
											<a href="<?=Url::to(['site/resume-detail', 'id'=> $resume['res_id']])?>"><strong><?=$resume['res_title']?></strong></a>
										</td>
										<td class="hidden-xs text-center viewable-col">
											<a href="#" class="noo-resume-viewable" data-toggle="tooltip" title="Set Viewable">
												<i class="fa fa-star-o"></i>
											</a>
										</td>
										<td class="hidden-xs category-col">
											<em><?=$resume['resIdJobcategory']['jobcategory_name']?></em>
										</td>
										<td class="hidden-xs hidden-sm location-col">
											<i class="fa fa-map-marker"></i>&nbsp;<em><?=$resume['res_joblocation']?></em>
										</td>
										<td class="hidden-xs hidden-sm date-col">
											<span>
												<i class="fa fa-calendar"></i>
												&nbsp;<em><?=$resume['res_updatedat']?></em>
											</span>
										</td>
										<td class="hidden-xs hidden-sm date-col">
											<a href="<?=Url::to(['s-education/index', 'id'=>$resume['res_id']])?>" class="btn btn-xs btn-primary">Education</a>
											<a href="" class="btn btn-xs btn-info">Skill</a>
											<a href="" class="btn btn-xs btn-success">Work</a>
										</td>
										<td class="member-manage-actions text-center">
											<a href="<?=Url::to(['site/resume-detail', 'id'=>$resume['res_id']])?>" class="member-manage-action" data-toggle="tooltip" title="Detail Resume">
												<i class="fa fa-eye"></i>
											</a>
											<a href="<?=Url::to(['candidate/update-resume', 'id'=>$resume['res_id']])?>" class="member-manage-action" data-toggle="tooltip" title="Edit Resume">
												<i class="fa fa-pencil"></i>
											</a>
											<a href="#" class="member-manage-action action-delete modal-btn" data-url="<?=Url::to(['candidate/modal-delete-resume', 'id'=>$resume['res_id']])?>" data-toggle="tooltip" title="Delete Resume">
												<i class="fa fa-trash-o"></i>
											</a>
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
							<div class="member-manage-page pull-left">
								<a href="<?=Url::to(['candidate/create-resume'])?>" class="btn btn-primary">Create New Resume</a>
							</div>
						</div>
					</form>
				</div>
			</div>  
		</div> 
	</div> 
</div>