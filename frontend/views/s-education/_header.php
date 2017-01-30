<?php
use yii\helpers\Url;
use yii\helpers\Html;

$control = Yii::$app->controller->id;

?>
<div class="member-heading">
	<div class="container-boxed max">
		<div class="member-heading-nav">
			<ul>
				<li <?= (($control == 's-education') ? 'class="active"': "")?>><a href="<?=Url::to(['s-education/index', 'id'=>$_GET['id']])?>"><i class="fa fa-institution"></i> Education</a></li>
				<li <?= (($control == 's-workexperience') ? 'class="active"': "")?>><a href="<?=Url::to(['s-workexperience/index', 'id'=>$_GET['id']])?>"><i class="fa fa-building"></i> Work Experience</a></li>
				<li <?= (($control == 's-skillsummary') ? 'class="active"': "")?>><a href="<?=Url::to(['s-skillsummary/index', 'id'=>$_GET['id']])?>"><i class="fa fa-sliders"></i> Skill Summary</a></li>
				<li class="divider" role="presentation"></li>
				<li><a href="<?=Url::to(['candidate/index'])?>"><i class="fa fa-user"></i> Back to Resume</a></li>
			</ul>
		</div>
	</div>
</div>