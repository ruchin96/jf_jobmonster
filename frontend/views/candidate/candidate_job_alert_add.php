<?php
$this->title = 'Create Job Alert';

echo $this->render('candidate_header', ['sel_seeker' => $sel_seeker]);
?>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-12">
				<form class="form-horizontal">
					<div class="form-title">
						<h3>Create new Job alert</h3>
					</div>
					<div class="job_alert-form">
						<div class="job_alert-form row">
							<div class="form-group">
								<label for="title" class="col-sm-3 control-label">Alert Name</label>
								<div class="col-sm-9">
							    	<input type="text" value="" class="form-control" id="title"  name="title" autofocus required placeholder="Your alert name">
							    </div>
							</div>
							<div class="form-group">
								<label for="keywords" class="col-sm-3 control-label">Keywords</label>
								<div class="col-sm-9">
							    	<input type="text" value="" class="form-control" id="keywords"  name="keywords" placeholder="Enter keywords to match jobs">
							    </div>
							</div>
							<div class="form-group">
								<label for="job_location" class="col-sm-3 control-label">Job Location</label>
								<div class="col-sm-9 ">
									<select id="job_location" name="job_location[]" multiple class="form-control form-control-chosen">
										<option value="">&nbsp;</option>
										<option value="">Amsterdam</option>
										<option value="">Atlanta</option>
										<option value="">Berlin</option>
										<option value="">Brisbane</option>
										<option value="">California</option>
										<option value="">Ha Noi</option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label for="job_category" class="col-sm-3 control-label">Job Category</label>
								<div class="col-sm-9 ">
									<select class="form-control form-control-chosen" name="job_category[]" id="job_category" multiple>
										<option value="">&nbsp;</option>
										<option value="">Customer Service</option>
										<option value="">Designer</option>
										<option value="">Developer</option>
										<option value="">Finance</option>
										<option value="">Human Resource</option>
										<option value="">Information Technology</option>
										<option value="">Marketing</option>
										<option value="">Others</option>
										<option value="">Sales</option>
									</select>
							    </div>
							</div>
							<div class="form-group">
								<label class="col-sm-3 control-label">Job Type</label>
								<div class="col-sm-9">
									<select class="form-control form-control-chosen" name="type" id="type" data-placeholder="Select job type for your job">
										<option value="">&nbsp;</option>
										<option value="">Contract</option>
										<option value="">Freelance</option>
										<option value="">Full Time</option>
										<option value="">Part Time</option>
									</select>
			    				</div>
							</div>
							<div class="form-group">
								<label for="frequency" class="col-sm-3 control-label">Email Frequency</label>
								<div class="col-sm-9">
									<select class="form-control" name="frequency" id="frequency">
										<option value="" >Daily</option>
										<option value="" selected='selected'>Weekly</option>
										<option value="">Fortnight</option>
										<option value="">Monthly</option>
									</select>
							    </div>
							</div>
						</div>
					</div>
					<div class="form-actions form-group text-center">
					 	<button type="button" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>  
		</div> 
	</div> 
</div>