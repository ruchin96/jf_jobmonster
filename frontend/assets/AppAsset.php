<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'template/css/site.css',
        'template/css/style.css',
        'template/css/custom.css',
        'template/css/font-awesome.min.css',
        'template/css/jquery.datetimepicker.css',
        'template/css/chosen.css',
        'http://fonts.googleapis.com/css?family=Droid+Serif:100,300,400,700,900,300italic,400italic,700italic,900italic',
        'http://fonts.googleapis.com/css?family=Montserrat:100,300,400,700,900,300italic,400italic,700italic,900italic',
        'template/css/style-selector.css',
        'template/css/colors/default.css',
    ];
    public $js = [
        'template/js/jquery.js',
        'template/js/bootstrap.min.js',
        'template/js/jquery-migrate.min.js',
        'template/js/modernizr-2.7.1.min.js',
        'template/js/jquery.cookie.js',
        'template/js/jquery.blockUI.min.js',
        'template/js/imagesloaded.pkgd.min.js',
        'template/js/isotope-2.0.0.min.js',
        'template/js/jquery.touchSwipe.min.js',
        'template/js/hoverIntent-r7.min.js',
        'template/js/superfish-1.7.4.min.js',
        'template/js/script.js',
        'template/js/chosen.jquery.min.js',
        'template/js/jquery.datetimepicker.js',
        'template/js/jquery.parallax-1.1.3.js',
        'template/js/jquery.carouFredSel-6.2.1-packed.js',
        'template/js/custom.js',
        'template/js/style.selector.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
