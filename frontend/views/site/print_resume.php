<?php
use yii\helpers\Url;
use yii\helpers\Html;

$resume = $sel_resume;
?>
<!DOCTYPE html>
<html>
<head>
<title><?=$resume['resIdSeek']['seek_name']?> - Curriculum Vitae</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
<meta charset="UTF-8"> 

<link type="text/css" rel="stylesheet" href="<?=Yii::getAlias('@web')?>/cv-template/style.css">
<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<style type="text/css">
	
</style>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
			<!-- <img src="headshot.jpg" alt="Alan Smith" /> -->
			<?=$resume['resIdSeek']['seek_picture'] == null ? 
			    Html::img(Yii::$app->urlManager->baseUrl."/uploads/seeker/seek_picture/default/User.png", ['class'=>'photo','alt'=>'myImage','width'=>'160','height'=>'160']) 
			    : 
			    Html::img(Yii::$app->urlManager->baseUrl."/uploads/seeker/seek_picture/".$resume['resIdSeek']['seek_id']."/".$resume['resIdSeek']['seek_picture'], ['class'=>'photo','alt'=>'myImage','width'=>'160','height'=>'160'])
			?>
		</div>
		
		<div id="name">
			<h1 class="quickFade delayTwo"><?=$resume['resIdSeek']['seek_name']?></h1>
			<h2 class="quickFade delayThree"><?=$resume['resIdSeek']['seek_curr_job']?></h2>
		</div>
		
		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li>e: <a href="mailto:joe@bloggs.com" target="_blank"><?=$resume['resIdSeek']['seekIdUser']['email']?></a></li>
				<li>w: <a href="http://www.bloggs.com">www.bloggs.com</a></li>
				<li>m: <?=$resume['resIdSeek']['seek_telp']?></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
	
	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Profile</h1>
				</div>
				
				<div class="sectionContent">
					<p><?=$resume['res_selfdesc']?></p>
				</div>
			</article>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>
			
			<div class="sectionContent">
				<?php foreach ($all_work as $work) {?>
				<article>
					<h2><?=$work['work_jobtitle']?> at <?=$work['work_company']?></h2>
					<p class="subDetails"><?=date('Y', strtotime($work['work_start']))?> - <?=date('Y', strtotime($work['work_end']))?></p>
					<p><?=$work['work_note']?>.</p>
				</article>
				<?php } ?>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>
			
			<div class="sectionContent">
				<ul class="keySkills">
					<?php foreach ($all_skill as $skill) {?>
					<li><?=$skill['skill_name']?> (<?=$skill['skill_prosentase']?>%)</li>

					<?php } ?>
				</ul>
			</div>
			<div class="clear"></div>
		</section>
		
		
		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
			
			<div class="sectionContent">
				<?php foreach ($all_edu as $edu) {?>
				<article>
					<h2><?=$edu['edu_sname']?></h2>
					<p class="subDetails"><?=$edu['edu_qualify']?> - <?=date('Y', strtotime($edu['edu_start']))?> - <?=date('Y', strtotime($edu['edu_end']))?></p>
					<p style="text-align: justify;"><?=$edu['edu_note']?>.</p>
				</article>
				<?php } ?>
			</div>
			<div class="clear"></div>
		</section>
		
	</div>
	<div class="mainDetails">
		<div class="quickFade" style="display: inline;">
			<img class="noo-logo-img noo-logo-normal" src="<?=Yii::getAlias('@web')?>/template/images/logo-jobmonster.png" alt="">
		</div>
		<div style="display: inline-block;text-align: right; float: right;" class="quickFade delayFour">
			<p>
				Kampus ITS Sukolilo, Surabaya, 60111, Indonesia<br/>
				<a href="mailto:email@domain.com">jobmonster.cs@gmail.com</a><br/>
				http://jobmonster.16mb.com
			</p>
		</div>
		<div class="clear"></div>
	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
</body>
</html>
<script type="text/javascript">
	window.onload = function() { window.print(); }
</script>