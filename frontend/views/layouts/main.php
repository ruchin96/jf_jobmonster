<?php

/* @var $this yii\web\View */
use yii\web\View;
use yii\helpers\Html;
use yii\helpers\Url;
// use yii\Bootstrap\Modal;
use frontend\assets\AppAsset;
use common\models\SSeeker;
use common\models\CCompany;

$uris = Yii::$app->controller->action->id;
$con = Yii::$app->controller->id;

// var_dump(Url::to(['site/login']));

$this->title = 'Job Monster';
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="en-US">
	
<!-- Mirrored from tk-themes.net/html-jobmonster/home-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Apr 2016 02:24:26 GMT -->
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>

		<style type="text/css">
			.freelencer{
				color:#123454 !important;
			}
		</style>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?php $this->head() ?>
	</head>
	<body>
        <?php $this->beginBody() ?>
		<div class="site">
			<header class="noo-header" id="noo-header">
				<div class="navbar-wrapper">
					<div class="navbar navbar-default fixed-top shrinkable" style="margin-bottom: -15px;">
						<div class="container-boxed max">
							<div class="navbar-header">
								<h1 class="sr-only">JobMonster</h1> 
								<a class="navbar-toggle collapsed" data-toggle="collapse" data-target=".noo-navbar-collapse">
									<span class="sr-only">Navigation</span>
									<i class="fa fa-bars"></i>
								</a>
								<a class="navbar-toggle member-navbar-toggle collapsed" data-toggle="collapse" data-target=".noo-user-navbar-collapse">
									<i class="fa fa-user"></i>
								</a>
								<a href="<?=Url::to(['site/index'])?>" class="navbar-brand" style="margin-left:-20px">
									<img class="noo-logo-img noo-logo-normal" src="<?=Yii::getAlias('@web')?>/template/images/logo-jobmonster.png" alt="">
									<img class="noo-logo-mobile-img noo-logo-normal" src="<?=Yii::getAlias('@web')?>/template/images/logo-mobile.png" alt="">
								</a>
							</div>  
							<nav class="collapse navbar-collapse noo-user-navbar-collapse">
								<ul class="navbar-nav sf-menu">
									<li>
										<a href="member.html"><i class="fa fa-sign-in"></i> Login</a>
									</li>
									<li class="button_socical fb">
										<i class="fa fa-facebook-square"></i>
										<em class="fa-facebook-square">Login with Facebook</em>
									</li>
									<li class="button_socical gg">
										<i class="fa fa-google-plus"></i>
										<em class="fa-google-plus">Login with Google</em>
									</li>
									<li class="button_socical linkedin">
										<i class="fa fa-linkedin-square"></i>
										<em class="fa-linkedin-square">Login with LinkedIn</em>
									</li>
									<li>
										<a href="member.html"><i class="fa fa-key"></i> Register</a>
									</li>
								</ul>
							</nav>
							<nav class="collapse navbar-collapse noo-navbar-collapse">
								<ul class="navbar-nav sf-menu">
									<li class="<?=(($uris == 'index')? 'current-menu-item':'')?> align-left">
										<a href="<?=Url::to(['site/index'])?>">Home</a>
									</li>
									<li class="<?=(($uris == 'joblist')? 'current-menu-item':'')?> align-left">
										<a href="<?=Url::to(['site/joblist','page'=>1])?>">Jobs</a>
									</li>
									<li class="<?=(($uris == 'companylist')? 'current-menu-item':'')?> align-left">
										<a href="<?=Url::to(['site/companylist','page'=>1])?>">Companies</a>
									</li>
									<li class="<?=(($uris == 'resumelist')? 'current-menu-item':'')?> align-left">
										<a href="<?=Url::to(['site/resumelist','page'=>1])?>">Resumes</a>
									</li>
									<li class="align-left">
										<a href="#">Pages</a>
										<ul class="sub-menu">
											<li><a href="<?=Url::to(['blog/index'])?>">Blog &amp; Article</a></li>
											<li><a href="<?=Url::to(['site/contact'])?>">Contact us</a></li>
											<li><a href="<?=Url::to(['site/about'])?>">About</a></li>
										</ul>
									</li>
									<?php if(Yii::$app->user->isGuest){?>
									<?php }else if(Yii::$app->user->identity->role == 3){?>
									<li class="menu-item-post-btn" style="margin-top: 15px;">
										<a href="<?=Url::to(['candidate/create-resume'])?>">Post a Resume</a>
									</li>
									<?php } else if(Yii::$app->user->identity->role == 2){?>
									<li class="menu-item-post-btn" style="margin-top: 15px;">
										<a href="<?=Url::to(['company/create-job'])?>">Post a Job</a>
									</li>
									<?php } ?>
                                    <?php if(Yii::$app->user->isGuest){?>
									<li class="nav-item-member-profile login-link align-center">
										<a href="#" class="member-links member-login-link modal-btn" data-url="<?=Url::to(['site/login'])?>">
											<i class="fa fa-sign-in"></i>&nbsp;Login
										</a>
										<ul class="sub-menu login-socical">
											<li class="button_socical fb">
												<i class="fa fa-facebook-square"></i>
												<em class="fa-facebook-square">Login with Facebook</em>
											</li>
											<li class="button_socical gg">
												<i class="fa fa-google-plus"></i>
												<em class="fa-google-plus">Login with Google</em>
											</li>
											<li class="button_socical linkedin">
												<i class="fa fa-linkedin-square"></i>
												<em class="fa-linkedin-square">Login with LinkedIn</em>
											</li>
										</ul>
									</li>
									<li class="nav-item-member-profile register-link" style="margin-top: 15px;">
										<a href="#" class="member-links member-register-link modal-btn" data-url="<?=Url::to(['site/signup'])?>">
											<i class="fa fa-key"></i>&nbsp;Register
										</a>
									</li>
                                    <?php } else { 
                                    	$id_user = Yii::$app->user->identity->id;
                                    ?>
                                    <li class="nav-item-member-profile login-link align-right">
										<a href="#" class="sf-with-ul">
											<span class="profile-name"><?=Yii::$app->user->identity->username?></span>
											<span class="profile-avatar">
											<?php if(Yii::$app->user->identity->role == 3){?>
												<?php $sel_seeker = SSeeker::find()->select(['seek_id', 'seek_picture'])->where(['seek_id_user'=>$id_user])->asArray()->one(); ?>
												<?=
													$sel_seeker['seek_picture'] == null ? 
									                    Html::img(Yii::getAlias('@web')."/uploads/seeker/seek_picture/default/User.png", ['alt'=>'myImage','width'=>'100','height'=>'100']) 
									                    : 
									                    Html::img(Yii::getAlias('@web')."/uploads/seeker/seek_picture/".$sel_seeker['seek_id']."/".$sel_seeker['seek_picture'], ['alt'=>'myImage','width'=>'100','height'=>'100'])
												?>
											<?php } else if(Yii::$app->user->identity->role == 2){?>
												<?php $sel_company = CCompany::find()->select(['company_id', 'company_logo'])->where(['company_id_user'=>$id_user])->asArray()->one(); ?>
												<?=
													$sel_company['company_logo'] == null ? 
												        Html::img(Yii::getAlias('@web')."/uploads/company/company_logo/default/User.png", ['alt'=>'myImage','width'=>'100','height'=>'100']) 
												        : 
												        Html::img(Yii::getAlias('@web')."/uploads/company/company_logo/".$sel_company['company_id']."/".$sel_company['company_logo'], ['alt'=>'myImage','width'=>'100','height'=>'100']);
												?>
											<?php } else { ?>
												<img alt="" src="<?=Yii::getAlias('@web')?>/template/images/avatar/anonymous.png" height="40" width="40">
											<?php } ?>
											</span>
										</a>
										<ul class="sub-menu">
										<?php if(Yii::$app->user->identity->role == 3){?>
											<li <?=(($con.'/'.$uris == 'candidate/create-resume')? 'class="current-menu-item"':'')?>>
												<a href="<?=Url::to(['candidate/create-resume'])?>">
													<i class="fa fa-edit"></i> Post a Resume
												</a>
											</li>
											<li <?=(($con.'/'.$uris == 'candidate/index')? 'class="current-menu-item"':'')?>>
												<a href="<?=Url::to(['candidate/index'])?>">
													<i class="fa fa-file-text-o"></i> Manage Resume
												</a>
											</li>
											<li <?=(($con.'/'.$uris == 'candidate/manage-app')? 'class="current-menu-item"':'')?>>
												<a href="<?=Url::to(['candidate/manage-app'])?>">
													<i class="fa fa-newspaper-o"></i> Manage Application
												</a>
											</li>
											<li <?=(($con.'/'.$uris == 'candidate/bookmark-job')? 'class="current-menu-item"':'')?>>
												<a href="<?=Url::to(['candidate/bookmark-job'])?>">
													<i class="fa fa-heart"></i> Bookmarked Jobs
												</a>
											</li>
											<li <?=(($con.'/'.$uris == 'candidate/job-alert')? 'class="current-menu-item"':'')?>>
												<a href="<?=Url::to(['candidate/job-alert'])?>">
													<i class="fa fa-bell-o"></i> Jobs Alert
												</a>
											</li>
											<li class="divider" role="presentation"></li>
											<li <?=(($con.'/'.$uris == 'candidate/profile')? 'class="current-menu-item"':'')?>>
												<a href="<?=Url::to(['candidate/profile'])?>">
													<i class="fa fa-user"></i> My Profile
												</a>
											</li>
										<?php } else if(Yii::$app->user->identity->role == 2){?>
											<li <?=(($con.'/'.$uris == 'company/create-job')? 'class="current-menu-item"':'')?>>
												<a href="<?=Url::to(['company/create-job'])?>">
													<i class="fa fa-edit"></i> Post a Job
												</a>
											</li>
											<li <?=(($con.'/'.$uris == 'company/manage-app')? 'class="current-menu-item"':'')?>>
												<a href="<?=Url::to(['company/manage-app'])?>">
													<i class="fa fa-newspaper-o"></i> Manage Application
												</a>
											</li>
											<li <?=(($con.'/'.$uris == 'company/manage-job')? 'class="current-menu-item"':'')?>>
												<a href="<?=Url::to(['company/manage-job'])?>">
													<i class="fa fa-file-text-o"></i> Manage Job
												</a>
											</li>
											<li class="divider"></li>
											<li <?=(($con.'/'.$uris == 'company/index')? 'class="current-menu-item"':'')?>>
												<a href="<?=Url::to(['company/index'])?>">
													<i class="fa fa-file-text-o"></i> Manage Plan
												</a>
											</li>
											<li <?=(($con.'/'.$uris == 'company/profile')? 'class="current-menu-item"':'')?>>
												<a href="<?=Url::to(['company/profile'])?>">
													<i class="fa fa-user"></i> My Profile
												</a>
											</li>
										<?php } else { ?>
											<li>
												<a href="<?=Yii::$app->urlManagerBackend->createUrl(['site/login'])?>">
													<i class="fa fa-file-text-o"></i> Administrator Page
												</a>
											</li>
											<li class="divider"></li>
										<?php } ?>
											<li><?php echo Html::beginForm(['/site/logout'], 'post', ['class' => ''])
		                                        . Html::submitButton(
		                                            '<i class="fa fa-sign-out"></i>Sign Out',['class' => 'btn btn-link', 'style' => 'margin-left:10px;']
		                                        )
		                                        . Html::endForm();
											?></li>
										</ul>
									</li>
                                    <?php }?>
								</ul>
							</nav>  
						</div>  
					</div>  
				</div>
			</header>
			
			<?=$content?>
            
			<div class="colophon wigetized">
				<div class="container-boxed max">
					<div class="row">
						<div class="col-sm-4">
							<div class="widget widget_text">
								<h4 class="widget-title">Jobmonster</h4>
								<div class="textwidget">
									Site Which help seeker to find job which match with their skill and help campany to hire best job seeker here.
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="widget widget_text">
								<h4 class="widget-title">Contact Us</h4>
								<div class="textwidget">
									<p>
										JobMonster Indonesia.<br/>
										Kampus ITS Sukolilo, Surabaya, 60111, Indonesia<br/>
										<a href="mailto:email@domain.com">jobmonster.cs@gmail.com</a><br/>
										http://jobmonster.16mb.com
									</p>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="widget mailchimp-widget">
								<h4 class="widget-title">NEWSLETTER</h4>
								<form class="mc-subscribe-form">
									<label for="email">
										To Receive more info from our site, fill this email.
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
			<footer class="colophon site-info">
				<div class="container-full">
					<div class="footer-more">
						<div class="container-boxed">
							<div class="row">
								<div class="col-md-12">
									<div class="noo-bottom-bar-content">
										© 2015 Jobmonster. Designed with
										<i> </i> Muhammad Masruhin and Jobmonster Indonesia Team
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>  
			</footer>  
		</div>  
		<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>		
        
        <div class="memberModalLogin modal fade" id="allModal" tabindex="-1" role="dialog" aria-hidden="true">
			
		</div>

		<!-- <div class="memberModalRegister modal fade" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
			
		</div> -->

        <?php 
        $my_js = " jQuery('document').ready(function ($) {

				$('.modal-btn').click(function(e){
					// alert($(this).data('url'));
					var url = $(this).data('url');
					e.preventDefault();		
					$.ajax({
			          url: url,
			          type:'GET',
			          success: function(data){
							$('#allModal').html(data);
							$('#allModal').modal('show');
						}
			      	});
				});
				
				$('li a').click(function(e){
					e.preventDefault();
					var page = $(this).attr('href');
					// alert(page);
					if (page!='#' || page!=\"undefined\") {
						$.ajax({
							url : page,
							type : 'GET',
							success: function(data){
								$('body').html(data);
								if (typeof (history.pushState) != \"undefined\") {
									var stateObj = { foo: \"bar\" };
							        history.pushState(stateObj, \"JobMonster\", page);
							    } else {
							        alert(\"Browser does not support HTML5.\");
							    }
							},
							error: function(data){
								alert('Halaman Error atau belum di define!');
							}
						});
					}
				});

				$('#slider_employer').carouFredSel({
					responsive	: true,
					auto 		: false,
					items		: {
						width		: 180,
						height		: 'variable',
						visible		: {
							min			: 1,
							max			: 6
						}
					},
					pagination: { container : '.pag_slider_employer', keys	: true }
				});
				$('#slider_testimonial').carouFredSel({
					responsive	: true,
					auto 		: false,
					items		: {
						width		: 180,
						height		: 'variable',
						visible		: {
							min			: 1,
							max			: 3
						}
					},
					pagination: { container : '.pag_slider_testimonial', keys	: true }
				});
				$('.job-slider .posts-loop-content').carouFredSel({
					infinite: true,
					circular: true,
					responsive: true,
					debug : false,
					items: {
					  start: 0
					},
					scroll: {
					  items: 1,
					  duration: 400,
					  fx: 'crossfade'
					},
					auto: {
					  timeoutDuration: 3000,
					  play: true
					},
					swipe: {
					  onTouch: true,
					  onMouse: true
					},
					prev : '#prev',
    				next : '#next'
				});
			});
			jQuery(document).ready(function($) {
				$('.dp-birthday').datetimepicker({format:'Y-m-d'});
			});
			";
            $this->registerJs($my_js,View::POS_END);
		?>
	<?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>