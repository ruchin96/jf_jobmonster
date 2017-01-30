<?php
use yii\widgets\ActiveForm;
$this->title = 'Company Profile';

$company = $sel_company;
echo $this->render('company_header',['sel_company' => $sel_company]);
?>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-12">
				<div class="form-title">
					<h3>Edit Company Info</h3>
				</div>
				<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class'=>'form-horizontal']]); ?>
					<div class="company-profile-form">
						<div class="form-group row">
							<label for="company_name" class="col-sm-3 control-label">Company Name</label>
							<div class="col-sm-9">
								<input type="hidden" value="<?=$company['company_id']?>" name="company_id">
						    	<input type="text" class="form-control" required id="company_name" name="company_name" placeholder="Enter your company name" value="<?=$company['company_name']?>">
						    </div>
						</div>
						<div class="form-group row">
							<label for="company_website" class="col-sm-3 control-label">Company Website</label>
							<div class="col-sm-9">
						    	<input type="text" class="form-control" id="company_website" value="<?=$company['company_website']?>" name="company_website" placeholder="Enter your company website">
						    </div>
						</div>
						<div class="form-group row">
						    <label for="company_desc" class="col-sm-3 control-label">Company Description</label>
						    <div class="col-sm-9">
						    	<textarea class="form-control form-control-editor" id="company_desc"  name="company_desc" rows="8" placeholder="Enter your company description"><?=$company['company_desc']?></textarea>
						    </div>
						</div>
						<div class="form-group row">
							<label for="company_instagram" class="col-sm-3 control-label">Company Type</label>
							<div class="col-sm-9">
						    	<select class="form-control form-control-chosen" name="company_type" id="type" data-placeholder="Select job type for your job">
						    	<?php foreach ($companytype as $type) {?>
									<option value="<?=$type['companytype_id']?>" <?=$type['companytype_id']==$company['company_type'] ? 'selected' : ''?>><?=$type['companytype_name']?></option>
								<?php } ?>
								</select>
						    </div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 control-label">Company Logo</label>
							<div class="col-sm-9">
								<div class="row">
									<div class="col-md-1 noo_upload"></div>
									<div class="col-md-10">
										<input type="file" name="company_logo" accept=".jpg,.png,.gif" value="<?=$company['company_logo']?>">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-sm-3 control-label">Cover Image</label>
							<div class="col-sm-9">
								<div class="row">
									<div class="col-md-1 noo_upload"></div>
									<div class="col-md-10">
										<input type="file" name="company_cover" accept=".jpg,.png,.gif" value="<?=$company['company_cover']?>">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="company_googleplus" class="col-sm-3 control-label">Google+</label>
							<div class="col-sm-9">
						    	<input type="text" class="form-control" id="company_googleplus" value="<?=$company['company_googleplus']?>"  name="company_googleplus" placeholder="http://">
						    </div>
						</div>
						<div class="form-group row">
							<label for="company_facebook" class="col-sm-3 control-label">Facebook</label>
							<div class="col-sm-9">
						    	<input type="text" class="form-control" id="company_facebook" value="<?=$company['company_facebook']?>"  name="company_facebook" placeholder="http://">
						    </div>
						</div>
						<div class="form-group row">
							<label for="company_linkedin" class="col-sm-3 control-label">LinkedIn</label>
							<div class="col-sm-9">
						    	<input type="text" class="form-control" id="company_linkedin" value="<?=$company['company_linkedin']?>"  name="company_linkedin" placeholder="http://">
						    </div>
						</div>
						<div class="form-group row">
							<label for="company_twitter" class="col-sm-3 control-label">Twitter</label>
							<div class="col-sm-9">
						    	<input type="text" class="form-control" id="company_twitter" value="<?=$company['company_twitter']?>"  name="company_twitter" placeholder="http://">
						    </div>
						</div>
					</div>
					<div class="form-group">
							<button type="submit" class="btn btn-primary">Save</button>
						</div>
				<?php ActiveForm::end(); ?>
				<hr/>
				<div class="form-title">
					<h3>Change Password</h3>
				</div>
				<form class="form-horizontal">
					<div class="row">
						<div class="col-sm-12">
							<div class="form-group">
								<label for="old_pass" class="col-sm-3 control-label">Current Password</label>
								<div class="col-sm-9">
							    	<input type="password" class="form-control" required id="old_pass" value="" name="old_pass">
							    </div>
							</div>
							<div class="form-group">
								<label for="new_pass" class="col-sm-3 control-label">New Password</label>
								<div class="col-sm-9">
							    	<input type="password" class="form-control" required id="new_pass" value="" name="new_pass">
							    </div>
							</div>
							<div class="form-group">
								<label for="new_pass_confirm" class="col-sm-3 control-label">Confirm new password</label>
								<div class="col-sm-9">
							    	<input type="password" class="form-control" required id="new_pass_confirm" value="" name="new_pass_confirm">
							    </div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save New Password</button>
					</div>
				</form>
				<hr/>
			</div>  
		</div> 
	</div> 
</div>