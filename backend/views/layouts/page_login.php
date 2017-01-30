<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\web\JsExpression;
use yii\web\View;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
        <link rel="apple-touch-icon" href="<?=Yii::getAlias('@web')?>/pages/ico/60.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?=Yii::getAlias('@web')?>/pages/ico/76.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?=Yii::getAlias('@web')?>/pages/ico/120.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?=Yii::getAlias('@web')?>/pages/ico/152.png">
        <link rel="icon" type="image/x-icon" href="<?=Yii::getAlias('@web')?>/favicon.ico" />
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">
        <meta content="" name="description" />
        <meta content="" name="author" />
        <?php $this->head() ?>
    </head>
    <body class="pace-top bg-white">
        <?php $this->beginBody() ?>
            <!-- begin #page-loader -->
            <div id="page-loader" class="fade in"><span class="spinner"></span></div>
            <!-- end #page-loader -->
			<?=$content;?>
		<?php $this->endBody() ?>
    </body>
    <?php
    	$my_js1 = '
    	window.onload = function(){
	      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
	        document.head.innerHTML += "<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />"
	    }';
	    $this->registerJs($my_js1, View::POS_BEGIN);

		$my_js = '
            $(document).ready(function() {
                App.init();
                $("#form-login").validate();
            });

		';
		$this->registerJs($my_js, View::POS_END);
	?>
</html>
<?php $this->endPage() ?>