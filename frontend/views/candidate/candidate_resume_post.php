<?php
use yii\helpers\Url;
use yii\helpers\Html;

$seeker = $sel_seeker;
?>
<div class="noo-page-heading">
	<div class="container-boxed max text-center parallax-content">
		<div class="member-heading-avatar">
			<?=
				$sel_seeker['seek_picture'] == null ? 
                    Html::img(Yii::getAlias('@web')."/uploads/seeker/seek_picture/default/User.png", ['alt'=>'myImage','width'=>'100','height'=>'100']) 
                    : 
                    Html::img(Yii::getAlias('@web')."/uploads/seeker/seek_picture/".$sel_seeker['seek_id']."/".$sel_seeker['seek_picture'], ['alt'=>'myImage','width'=>'100','height'=>'100'])
			?>
		</div>
		<div class="page-heading-info ">
			<h1 class="page-title">Post a Resume</h1>
		</div>
		<div class="page-sub-heading-info">
			General Information
		</div>
	</div> 
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="container-wrap">
	<div class="main-content container-fullwidth">
		<div class="row">
			<div class="noo-main col-md-12">
				<div class="jform">
					<?= $this->render('_header_posting')?>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="default-tab-1">
							<div class="jform-body">
								<div class="container-boxed max">
									<div class="jstep-content">
										<div class="jpanel jpanel-resume-form">
											<div class="jpanel-title">
												<h3>General Information</h3>
											</div>
											<div class="jpanel-body">
												<div class="resume-candidate-profile">
													<div class="row">
														<div class="col-sm-3 profile-avatar">
															<img alt='' src='<?=Yii::getAlias('@web')?>/template/images/avatar/anonymous_big.png' height='160' width='160' />
														</div>
														<div class="col-sm-9 candidate-detail">
															<div class="candidate-title clearfix">
																<h2><?=$sel_seeker['seek_name']?></h2>
																<a class="btn btn-default pull-right" href="#">
																	<i class="fa fa-pencil"></i>
																	Edit Profile
																</a>
															</div>
															<div class="candidate-info">
																<div class="row">
																	<div class="col-sm-6">
																		<i class="fa fa-suitcase text-primary"></i>
																		&nbsp;&nbsp;<?=$sel_seeker['seek_curr_job']?>
																	</div>
																	<div class="col-sm-6">
																		<i class="fa fa-map-marker text-primary"></i>
																		&nbsp;&nbsp;<?=$sel_seeker['seek_address']?>
																	</div>
																	<div class="col-sm-6">
																		<i class="fa fa-birthday-cake text-primary"></i>
																		&nbsp;&nbsp;<?=$sel_seeker['seek_birthday']?>
																	</div>
																	<div class="col-sm-6">
																		<i class="fa fa-phone text-primary"></i>
																		&nbsp;&nbsp;<?=$sel_seeker['seek_telp']?>
																	</div>
																	<div class="col-sm-6 pull-right">
																		<a href="mailto:email@domain.com">
																			<i class="fa fa-envelope text-primary"></i>
																			&nbsp;&nbsp;<?=Yii::$app->user->identity->email?>
																		</a>
																	</div>
																</div>
																<div class="row">
																	<div class="col-sm-6 pull-left"></div>
																	<div class="candidate-social col-sm-6 pull-right">
																		<a class="noo-icon fa fa-facebook" href="#" target="_blank"></a>
																		<a class="noo-icon fa fa-twitter" href="#" target="_blank"></a>
																		<a class="noo-icon fa fa-linkedin" href="#" target="_blank"></a>
																		<a class="noo-icon fa fa-behance" href="#" target="_blank"></a>
																		<a class="noo-icon fa fa-instagram" href="#" target="_blank"></a>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<hr/>
													<?= $this->render('_form_resume', [
													    'model' => $model,
													]) ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>  
		</div> 
	</div> 
</div>
