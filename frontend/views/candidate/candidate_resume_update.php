<?php
use yii\helpers\Url;
use yii\helpers\Html;

$seeker = $sel_seeker;
?>
<div class="noo-page-heading">
	<div class="container-boxed max text-center parallax-content">
		<div class="member-heading-avatar">
			<img alt='' src='<?=Yii::getAlias('@web')?>/template/images/avatar/anonymous_big.png' height='100' width='100'/>
		</div>
		<div class="page-heading-info ">
			<h1 class="page-title">Update a Resume</h1>
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
					<div class="jform-header">
						<div class="container-boxed max">
							<div class="jform-steps">
								<ul class="jsteps jsteps-4">
									<li class="completed">
										<span class="jstep-num">
											<a href="javascript:void(0);"><i class="fa fa-check"></i></a>
										</span>
										<div class="jstep-line">
											<span class="jstep-dot"></span>
										</div>
										<div class="jstep-label">Login or create an account</div>
									</li>
									<li  class="active">
										<span class="jstep-num">
											<a href="#post-resume-1">2</a>
										</span>
										<div class="jstep-line">
											<span class="jstep-dot"></span>
										</div>
										<div class="jstep-label">General Information</div>
									</li>
									<li>
										<span class="jstep-num">
											<a href="#post-resume-2">3</a>
										</span>
										<div class="jstep-line">
											<span class="jstep-dot"></span>
										</div>
										<div class="jstep-label">Resume Detail</div>
									</li>
									<li>
										<span class="jstep-num">
											<a href="javascript:void(0);">4</a>
										</span>
										<div class="jstep-line">
											<span class="jstep-dot"></span>
										</div>
										<div class="jstep-label">Preview and Finish</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
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
<div class="colophon wigetized">
	<div class="container-boxed max">
		<div class="row">
			<div class="col-sm-4">
				<div class="widget widget_text">
					<h4 class="widget-title">Jobmonster</h4>
					<div class="textwidget">
						Donec elementum tellus vel magna bibendum, et fringilla metus tristique. Vestibulum cursus venenatis lacus, vel eleifend lectus blandit a.
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="widget widget_text">
					<h4 class="widget-title">Contact Us</h4>
					<div class="textwidget">
						<p>
							JobMonster Inc.<br/>
							54/29 West 21st Street, New York, 10010, USA<br/>
							<a href="mailto:email@domain.com">email@domain.com</a><br/>
							http://jobmonster.com
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="widget mailchimp-widget">
					<h4 class="widget-title">NEWSLETTER</h4>
					<form class="mc-subscribe-form">
						<label for="email">
							Fusce magna tortor, posuere a condimentum ac, vehicula sit amet lorem.
						</label>
						<div class="mc-email-wrap">
							<input type="email" id="email" name="mc_email" class="form-control mc-email" value="" placeholder="Enter your email here..."/>
						</div>
					</form>
				</div>
			</div>
		</div>  
	</div>  
</div> 