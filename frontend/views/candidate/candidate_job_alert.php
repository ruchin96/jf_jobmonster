<?php
$this->title = 'Jobs Alert';

echo $this->render('candidate_header', ['sel_seeker' => $sel_seeker]);
?>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-12">
				<div class="member-manage">
					<h3>You've set up 5 job alert.</h3>
					<form>
						<div class="member-manage-table">
							<table class="table">
								<thead>
									<tr>
										<th>Alert Name</th>
										<th class="hidden-xs">Keyworks</th>
										<th class="hidden-xs hidden-sm">Job Location</th>
										<th class="hidden-xs">Job Category</th>
										<th class="hidden-xs hidden-sm">Job Type</th>
										<th class="hidden-xs hidden-sm">Frequency</th>
										<th class="text-center hidden-xs">Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><strong>Designer Job</strong></td>
										<td class="hidden-xs"><em>designer, photoshop, ai</em></td>
										<td class="hidden-xs hidden-sm"><em>Amsterdam, Angeles City</em></td>
										<td class="hidden-xs"><em>Designer, Developer</em></td>
										<td class="hidden-xs hidden-sm">
											<span class="job-type full-time">
												<a href="#">
													<i class="fa fa-bookmark"></i>&nbsp;<em>Full Time</em>
												</a>
											</span>
										</td>
										<td class="hidden-xs hidden-sm">
											<em>Monthly</em>
										</td>
										<td class="member-manage-actions hidden-xs text-center">
											<a href="#" data-toggle="tooltip" title="Edit Job Alert">
												<i class="fa fa-pencil"></i>
											</a>
											<a href="#" data-toggle="tooltip" title="Delete Job Alert">
												<i class="fa fa-trash-o"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td><strong>Designer Job</strong></td>
										<td class="hidden-xs"><em>designer, photoshop, ai</em></td>
										<td class="hidden-xs hidden-sm"><em>Amsterdam, Angeles City</em></td>
										<td class="hidden-xs"><em>Designer, Developer</em></td>
										<td class="hidden-xs hidden-sm">
											<span class="job-type contract">
												<a href="#">
													<i class="fa fa-bookmark"></i>&nbsp;<em>Contract</em>
												</a>
											</span>
										</td>
										<td class="hidden-xs hidden-sm">
											<em>Monthly</em>
										</td>
										<td class="member-manage-actions hidden-xs text-center">
											<a href="#" data-toggle="tooltip" title="Edit Job Alert">
												<i class="fa fa-pencil"></i>
											</a>
											<a href="#" data-toggle="tooltip" title="Delete Job Alert">
												<i class="fa fa-trash-o"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td><strong>Designer Job</strong></td>
										<td class="hidden-xs"><em>designer, photoshop, ai</em></td>
										<td class="hidden-xs hidden-sm"><em>Amsterdam, Angeles City</em></td>
										<td class="hidden-xs"><em>Designer, Developer</em></td>
										<td class="hidden-xs hidden-sm">
											<span class="job-type part-time">
												<a href="#">
													<i class="fa fa-bookmark"></i>&nbsp;<em>Part Time</em>
												</a>
											</span>
										</td>
										<td class="hidden-xs hidden-sm">
											<em>Monthly</em>
										</td>
										<td class="member-manage-actions hidden-xs text-center">
											<a href="#" data-toggle="tooltip" title="Edit Job Alert">
												<i class="fa fa-pencil"></i>
											</a>
											<a href="#" data-toggle="tooltip" title="Delete Job Alert">
												<i class="fa fa-trash-o"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td><strong>Designer Job</strong></td>
										<td class="hidden-xs"><em>designer, photoshop, ai</em></td>
										<td class="hidden-xs hidden-sm"><em>Amsterdam, Angeles City</em></td>
										<td class="hidden-xs"><em>Designer, Developer</em></td>
										<td class="hidden-xs hidden-sm">
											<span class="job-type full-time">
												<a href="#">
													<i class="fa fa-bookmark"></i>&nbsp;<em> Full Time</em>
												</a>
											</span>
										</td>
										<td class="hidden-xs hidden-sm">
											<em>Monthly</em>
										</td>
										<td class="member-manage-actions hidden-xs text-center">
											<a href="#" data-toggle="tooltip" title="Edit Job Alert">
												<i class="fa fa-pencil"></i>
											</a>
											<a href="#" data-toggle="tooltip" title="Delete Job Alert">
												<i class="fa fa-trash-o"></i>
											</a>
										</td>
									</tr>
									<tr>
										<td><strong>Designer Job</strong></td>
										<td class="hidden-xs"><em>designer, photoshop, ai</em></td>
										<td class="hidden-xs hidden-sm"><em>Amsterdam, Angeles City</em></td>
										<td class="hidden-xs"><em>Designer, Developer</em></td>
										<td class="hidden-xs hidden-sm">
											<span class="job-type contract">
												<a href="#">
													<i class="fa fa-bookmark"></i>&nbsp;<em>Contract</em>
												</a>
											</span>
										</td>
										<td class="hidden-xs hidden-sm">
											<em>Monthly</em>
										</td>
										<td class="member-manage-actions hidden-xs text-center">
											<a href="#" data-toggle="tooltip" title="Edit Job Alert">
												<i class="fa fa-pencil"></i>
											</a>
											<a href="#" data-toggle="tooltip" title="Delete Job Alert">
												<i class="fa fa-trash-o"></i>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="member-manage-toolbar bottom-toolbar clearfix">
							<div class="member-manage-page pull-left">
								<a href="candidate-add-job-alert.html" class="btn btn-primary">Create New</a>
							</div>
						</div>
					</form>
				</div>
			</div>  
		</div> 
	</div> 
</div>