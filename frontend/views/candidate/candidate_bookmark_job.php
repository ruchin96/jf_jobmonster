<?php
use yii\helpers\Url;

$this->title = 'Bookmark Jobs';

echo $this->render('candidate_header', ['sel_seeker' => $sel_seeker]);
?>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-12">
				<div class="member-manage">
					<h3>You've bookmarked <?=count($all_bookmark)?> jobs</h3>
					<form>
						<div class="member-manage-table">
							<table class="table">
								<thead>
									<tr>
										<th>Job Title</th>
										<th class="hidden-xs">Information</th>
										<th class="text-center">&nbsp;</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($all_bookmark as $bookmark) {?>
									<tr>
										<td>
											<div class="loop-item-wrap">
												<div class="loop-item-content">
													<h3 class="loop-item-title"><a href="<?=Url::to(['site/jobs-detail', 'id'=>$bookmark['bookmark_id_job']])?>"><?=$bookmark['bookmarkIdJob']['jobfinder_jobname']?></a></h3>
												</div>
											</div>
										</td>
										<td class="hidden-xs">
											<p class="content-meta">
												<span class="job-company"><a href="#"><?=$bookmark['bookmarkIdJob']['jobfinderIdCompany']['company_name']?></a></span>
												<span class="job-type full-time"><a href="#"><i class="fa fa-bookmark"></i><?=$bookmark['bookmarkIdJob']['jobfinderTimecategory']['timecategory_name']?></a></span>
												<span class="job-category"><i class="fa fa-folder"></i><a href="#"> <?=$bookmark['bookmarkIdJob']['jobfinderCategory']['jobcategory_name']?></a></span>
											</p>
										</td>
										<td class="member-manage-actions text-center">
											<a href="#" class="btn btn-primary modal-btn" data-url="<?=Url::to(['candidate/modal-delete-bookmark', 'id'=>$bookmark['bookmark_id']])?>">Remove</a>
										</td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</form>
				</div>
			</div>  
		</div> 
	</div> 
</div>