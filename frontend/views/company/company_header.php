<?php
use yii\helpers\Url;
use yii\helpers\Html;

$control = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;

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
			<!-- <img alt='' src='<?=Yii::getAlias('@web')?>/template/images/avatar/anonymous_big.png' height='100' width='100'/> -->
		</div>
		<div class="page-heading-info ">
			<h1 class="page-title"><?=Yii::$app->user->identity->username?></h1>
		</div>
		<div class="page-sub-heading-info">
			<?=$this->title?>
		</div>
	</div> 
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<div class="member-heading">
	<div class="container-boxed max">
		<div class="member-heading-nav">
			<ul>
				<li <?= (($control.'/'.$action == 'company/index') ? 'class="active"': "")?>><a class="link" href="<?=Url::to(['company/index'])?>"><i class="fa fa-file-text-o"></i> Manage Plan</a></li>
				<li <?= (($control.'/'.$action == 'company/manage-app') ? 'class="active"': "")?>><a class="link" href="<?=Url::to(['company/manage-app'])?>"><i class="fa fa-newspaper-o"></i> Manage Application</a></li>
				<li <?= (($control.'/'.$action == 'company/manage-job') ? 'class="active"': "")?>><a class="link" href="<?=Url::to(['company/manage-job'])?>"><i class="fa fa-file-text-o"></i> Manage Job</a></li>
				<li class="divider"></li>
				<li <?= (($control.'/'.$action == 'company/profile') ? 'class="active"': "")?>><a class="link" href="<?=Url::to(['company/profile'])?>"><i class="fa fa-users"></i> Company Profile</a></li>
				<li>
					<?php echo Html::beginForm(['/site/logout'], 'post', ['class' => ''])
                        . Html::submitButton(
                            '<i class="fa fa-sign-out"></i> Sign Out',[
                            	'class' => 'btn btn-link', 
                            	'style' => '
                            		color:#6e7172; 
                            		line-height:100px;
                            		display: block;
                            		white-space: nowrap;
                            		padding: 0 1.0714285714285714em;
                            		font-family: "Droid Serif",serif;
                            	']
                        )
                        . Html::endForm();
					?>
				</li>
			</ul>
		</div>
	</div>
</div>