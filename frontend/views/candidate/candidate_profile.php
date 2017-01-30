<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'My Profile';

$seeker = $sel_seeker;
// var_dump(Yii::$app->user->identity->id);die();
echo $this->render('candidate_header', ['sel_seeker' => $sel_seeker]);
?>
<div class="container-wrap">
	<div class="main-content container-boxed max offset">
		<div class="row">
			<div class="noo-main col-md-12">
				<div class="form-title">
					<h3>Change Profile</h3>
				</div>
				<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data', 'class'=>'form-horizontal']]); ?>
					<div class="candidate-profile-form row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="seek_name" class="col-sm-4 control-label">Full Name</label>
								<div class="col-sm-8">
									<input type="hidden" value="<?=$seeker['seek_id']?>" name="seek_id">
							    	<input type="text" class="form-control" required id="seek_name" value="<?=$seeker['seek_name']?>" name="seek_name" placeholder="Your name">
							    </div>
							</div>
							<div class="form-group">
								<label for="profile-email" class="col-sm-4 control-label">Email</label>
								<div class="col-sm-8">
							    	<input type="email" class="form-control" required id="profile-email" value="<?=Yii::$app->user->identity->email?>" name="email" placeholder="Your email">
							    </div>
							</div>
							<div class="form-group">
								<label for="seek_curr_job" class="col-sm-4 control-label">Current Job</label>
								<div class="col-sm-8">
							    	<input type="text" class="form-control" id="seek_curr_job" value="<?=$seeker['seek_curr_job']?>" name="seek_curr_job">
							    </div>
							</div>
							<div class="form-group">
								<label for="seek_curr_comp" class="col-sm-4 control-label">Current Company</label>
								<div class="col-sm-8">
							    	<input type="text" class="form-control" id="seek_curr_comp" value="<?=$seeker['seek_curr_comp']?>" name="seek_curr_comp">
							    </div>
							</div>
							<div class="form-group">
								<label for="seek_birthday" class="col-sm-4 control-label">Birthday</label>
								<div class="col-sm-8">
							    	<input type="text" class="form-control dp-birthday" id="seek_birthday" value="<?=$seeker['seek_birthday']?>" name="seek_birthday" placeholder="YYYY-MM-DD">
							    </div>
							</div>
							<div class="form-group">
								<label for="seek_address" class="col-sm-4 control-label">Address</label>
								<div class="col-sm-8">
							    	<input type="text" class="form-control" id="seek_address" value="<?=$seeker['seek_address']?>" name="seek_address">
							    </div>
							</div>
							<div class="form-group">
								<label for="seek_telp" class="col-sm-4 control-label">Phone Number</label>
								<div class="col-sm-8">
							    	<input type="text" class="form-control" id="seek_telp" value="<?=$seeker['seek_telp']?>" name="seek_telp">
							    </div>
							</div>
							<div class="form-group">
								<label for="seek_facebook" class="col-sm-4 control-label">Facebook</label>
								<div class="col-sm-8">
							    	<input type="text" class="form-control" id="seek_facebook" value="<?=$seeker['seek_facebook']?>"  name="seek_facebook" placeholder="http://">
							    </div>
							</div>
							<div class="form-group">
								<label for="seek_twitter" class="col-sm-4 control-label">Twitter</label>
								<div class="col-sm-8">
							    	<input type="text" class="form-control" id="seek_twitter" value="<?=$seeker['seek_twitter']?>"  name="seek_twitter" placeholder="http://">
							    </div>
							</div>
							<div class="form-group">
								<label for="seek_linkedin" class="col-sm-4 control-label">LinkedIn</label>
								<div class="col-sm-8">
							    	<input type="text" class="form-control" id="seek_linkedin" value="<?=$seeker['seek_linkedin']?>"  name="seek_linkedin" placeholder="http://">
							    </div>
							</div>
							<div class="form-group">
								<label for="seek_behance" class="col-sm-4 control-label">Behance</label>
								<div class="col-sm-8">
							    	<input type="text" class="form-control" id="seek_behance" value="<?=$seeker['seek_behance']?>"  name="seek_behance" placeholder="http://">
							    </div>
							</div>
							<div class="form-group">
								<label for="seek_instagram" class="col-sm-4 control-label">Instagram</label>
								<div class="col-sm-8">
							    	<input type="text" class="form-control" id="seek_instagram" value="<?=$seeker['seek_instagram']?>"  name="seek_instagram" placeholder="http://">
							    </div>
							</div>
							<div class="form-group">
								<label for="seek_googleplus" class="col-sm-4 control-label">Google+</label>
								<div class="col-sm-8">
							    	<input type="text" class="form-control" id="seek_googleplus" value="<?=$seeker['seek_googleplus']?>"  name="seek_googleplus" placeholder="http://">
							    </div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
							    <label for="seek_selfdesc" class="control-label">Instroduce Yourself <small>(Optional)</small></label>
							    <textarea class="form-control" id="seek_selfdesc" name="seek_selfdesc" rows="8">
							    <?=$seeker['seek_selfdesc']?>
							    </textarea>
							</div>
							<div class="alert alert-success col-sm-6 text-center">
								<?=
									$sel_seeker['seek_picture'] == null ? 
					                    Html::img(Yii::getAlias('@web')."/uploads/seeker/seek_picture/default/User.png", ['alt'=>'myImage','width'=>'200','height'=>'200']) 
					                    : 
					                    Html::img(Yii::getAlias('@web')."/uploads/seeker/seek_picture/".$sel_seeker['seek_id']."/".$sel_seeker['seek_picture'], ['alt'=>'myImage','width'=>'200','height'=>'200'])
								?>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label class="col-sm-8 control-label">Profile Image</label>
									<div class="col-sm-9">
										<div class="col-md-1 noo_upload"></div>
										<div class="col-md-10">
											<input type="file" name="seek_picture" accept=".jpg,.png,.gif" value="<?=$seeker['seek_picture']?>">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Save My Profile</button>
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
