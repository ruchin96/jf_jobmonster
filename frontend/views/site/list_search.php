<?php
use yii\helpers\Url;
use yii\helpers\Html;

$formatter = Yii::$app->formatter;

$con = Yii::$app->controller->action->id;

// var_dump($con);die();
?>
<div class="noo-page-heading">
	<div class="container-boxed max parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title">
			<?=($con == 'index' || $con == 'joblist') ? 'Result Jobs Search' : ($con == 'companylist' ? 'Result Companies Search' : 'Result Resumes Search' )?>
			</h1>
		</div>
	</div> 
	<div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>

<?= $this->render(($con == 'index' || $con == 'joblist') ? '_search_job' : ($con == 'companylist' ? '_search_company' : '_search_resume' ), [
    'resultSearch' => $resultSearch,
]) ?>