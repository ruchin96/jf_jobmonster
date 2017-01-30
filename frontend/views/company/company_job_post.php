<?php
use yii\helpers\Url;
use yii\helpers\Html;

$company = $sel_company;
?>
<div class="noo-page-heading">
	<div class="container-boxed max text-center parallax-content">
		<div class="member-heading-avatar">
			<?=
				$sel_company['company_logo'] == null ? 
			        Html::img(Yii::getAlias('@web')."/uploads/company/company_logo/default/User.png", ['alt'=>'myImage','width'=>'100','height'=>'100']) 
			        : 
			        Html::img(Yii::getAlias('@web')."/uploads/company/company_logo/".$sel_company['company_id']."/".$sel_company['company_logo'], ['alt'=>'myImage','width'=>'100','height'=>'100']);
			?>
		</div>
		<div class="page-heading-info">
			<h1 class="page-title">Post a Job</h1>
		</div>
		<div class="page-sub-heading-info">
			Describe your job vacancy
		</div>
	</div><!-- /.container-boxed -->
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="main-content container-fullwidth">
	<div class="row">
		<div class="noo-main col-md-12">
			<div class="jform">
				<div class="jform-header">
					<div class="container-boxed max">
						<div class="jform-steps">
							<ul class="jsteps jsteps-4">
								<li class=" completed">
									<span class="jstep-num">
										<a href="javascript:void(0);"><i class="fa fa-check"></i></a>
									</span>
									<div class="jstep-line">
										<span class="jstep-dot"></span>
									</div>
									<div class="jstep-label">Login or create an account</div>
								</li>
								<li class="completed">
									<span class="jstep-num">
										<a href="#"><i class="fa fa-check"></i></a>
									</span>
									<div class="jstep-line">
										<span class="jstep-dot"></span>
									</div>
									<div class="jstep-label">Choose a package</div>
								</li>
								<li class="active">
									<span class="jstep-num">
										<a href="javascript:void(0);">3</a>
									</span>
									<div class="jstep-line">
										<span class="jstep-dot"></span>
									</div>
									<div class="jstep-label">Describe your company and vacancy</div>
								</li>
								<li>
									<span class="jstep-num">
										<a href="javascript:void(0);">4</a>
									</span>
									<div class="jstep-line">
										<span class="jstep-dot"></span>
									</div>
									<div class="jstep-label">Preview and submit your job</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="jform-body">
					<div class="container-boxed max">
						<?=$this->render('_form_job', [
							'model'=>$model,
						])?>
					</div>
				</div>
			</div>
		</div> <!-- /.main -->
	</div><!--/.row-->
</div><!--/.container-full-->
