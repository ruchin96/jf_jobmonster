<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Portofolio';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="m-t-100 sm-m-t-30">
    <section class="p-b-40 p-t-55">
        <div class="container">
            <div class="m-b-30">
                <h1 class="text-center ">Firstallium Portofolio.</h1>
                <div class="b-b b-grey m-t-30"></div>
                <div class="col-md-9 col-md-offset-3 col-sm-8 col-sm-offset-2 p-t-15 p-b-15">
                    <ul class="no-style no-margin">
                        <li class="m-r-20 m-l-20 inline sm-block text-center sm-p-b-5 sm-m-b-5 b-grey sm-b-b">
                            <a href="#" class="link active text-black fs-13 block-title ">Design Grafis</a>
                        </li>
                        <li class="m-r-20 m-l-20 inline sm-block text-center sm-p-b-5 sm-m-b-5 b-grey sm-b-b">
                            <a href="#" class="link active text-black fs-13 block-title">Websites</a>
                        </li>
                        <li class="m-r-20 m-l-20 inline sm-block text-center sm-p-b-5 sm-m-b-5 b-grey sm-b-b">
                            <a href="#" class="link active text-black fs-13 block-title">Mobile</a>
                        </li>
                        <li class="m-r-20 m-l-20 inline sm-block text-center sm-p-b-5 sm-m-b-5 b-grey sm-b-b">
                            <a href="#" class="link active text-black fs-13 block-title">Desktop</a>
                        </li>
                        <li class="m-r-20 m-l-20 inline sm-block text-center ">
                            <a href="#" class="link active text-black fs-13 block-title">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="gallery">
            <div class="grid-sizer col-sm-3 col-xs-6 no-padding"></div>
            <div class="gallery-item col-sm-6 col-xs-12 no-padding hover-zoom">
                <div class="inner bottom-left bottom-right padding-30">
                    <h5 class="block-title text-white no-margin">SiapMagang</h5>
                    <h6 class="block-title fs-11 hint-text text-white m-t-5 m-b-0">03 Nov 2015</h6>
                    <p class="font-arial fs-11 text-white muted m-t-5 m-b-0">Logo design, Web Design and Branding</p>
                </div>
                <div class="ar-2-1">
                    <div data-pages-bg-image="<?=Yii::getAlias('@web')?>/assets/images/gallery_1.jpg" data-bg-overlay="black" data-overlay-opacity="0.4">
                    </div>
                </div>
            </div>
            <div class="gallery-item col-sm-3 col-xs-6 no-padding hover-zoom">
                <div class="inner bottom-left bottom-right padding-30">
                    <h5 class="block-title text-white no-margin">Anipedia Mobile</h5>
                    <h6 class="block-title fs-11 hint-text text-white m-t-5 m-b-0">03 Nov 2015</h6>
                    <p class="font-arial fs-11 text-white muted m-t-5 m-b-0">Logo design, Web Design and Branding</p>
                </div>
                <div class="ar-1-1">
                    <div data-pages-bg-image="<?=Yii::getAlias('@web')?>/assets/images/gallery_2.jpg" data-bg-overlay="black" data-overlay-opacity="0.4">
                    </div>

                </div>
            </div>
            <div class="gallery-item col-sm-3 col-xs-6 no-padding hover-zoom">
                <div class="inner bottom-left bottom-right padding-30">
                    <h5 class="block-title text-white no-margin">Rhe-blood+</h5>
                    <h6 class="block-title fs-11 hint-text text-white m-t-5 m-b-0">03 Nov 2015</h6>
                    <p class="font-arial fs-11 text-white muted m-t-5 m-b-0">Logo design, Web Design and Branding</p>
                </div>
                <div class="ar-1-1">
                    <div data-pages-bg-image="<?=Yii::getAlias('@web')?>/assets/images/gallery_6.jpg" data-bg-overlay="black" data-overlay-opacity="0.4">
                    </div>
                </div>
            </div>
            <div class="gallery-item col-sm-3 col-xs-6 no-padding hover-zoom">
                <div class="inner bottom-left bottom-right padding-30">
                    <h5 class="block-title text-white no-margin">An-Nahl Studio Website</h5>
                    <h6 class="block-title fs-11 hint-text text-white m-t-5 m-b-0">03 Nov 2015</h6>
                    <p class="font-arial fs-11 text-white muted m-t-5 m-b-0">Logo design, Web Design and Branding</p>
                </div>
                <div class="ar-1-1">
                    <div data-pages-bg-image="<?=Yii::getAlias('@web')?>/assets/images/gallery_4.jpg" data-bg-overlay="black" data-overlay-opacity="0.4">
                    </div>
                </div>
            </div>
            <div class="gallery-item col-sm-3 col-xs-6 no-padding hover-zoom">
                <div class="inner bottom-left bottom-right padding-30">
                    <h5 class="block-title text-white no-margin">Kulir Backend</h5>
                    <h6 class="block-title fs-11 hint-text text-white m-t-5 m-b-0">03 Nov 2015</h6>
                    <p class="font-arial fs-11 text-white muted m-t-5 m-b-0">Logo design, Web Design and Branding</p>
                </div>
                <div class="ar-1-1">
                    <div data-pages-bg-image="<?=Yii::getAlias('@web')?>/assets/images/gallery_3.jpg" data-bg-overlay="black" data-overlay-opacity="0.4">
                    </div>
                </div>
            </div>
            <div class="gallery-item col-sm-6 col-xs-12 no-padding hover-zoom">
                <div class="inner bottom-left bottom-right padding-30">
                    <h5 class="block-title text-white no-margin">Stupa Mobile</h5>
                    <h6 class="block-title fs-11 hint-text text-white m-t-5 m-b-0">03 Nov 2015</h6>
                    <p class="font-arial fs-11 text-white muted m-t-5 m-b-0">Logo design, Web Design and Branding</p>
                </div>
                <div class="ar-2-1">
                    <div data-pages-bg-image="<?=Yii::getAlias('@web')?>/assets/images/gallery_5.jpg" data-bg-overlay="black" data-overlay-opacity="0.4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="p-b-70 p-t-40">
        <div class="container">
            <h5 class="block-title hint-text no-margin">Explore</h5>
            <h5>
                Our long standing vision has been to bypass the usual admin dashboard structure, and move forward with a more
                sophisticated yet simple framework that would create a credible impact on the many conventional dashboard users.</h5>
        </div>
    </section>
    <section class="p-b-70 p-t-70 demo-hero-5" data-pages-bg-image="<?=Yii::getAlias('@web')?>/assets/images/gallery_hero_2.jpg">
    </section>

    <section class="bg-master-lightest p-b-85 p-t-75">
        <div class="container">
            <div class="md-p-l-20 md-p-r-20 xs-no-padding">
                <h5 class="block-title hint-text no-margin">Explore</h5>
                <div class="row">
                    <div class="col-sm-5 col-md-4">
                        <h1 class="m-t-5">Trusted <br>all around the World.</h1>
                    </div>
                    <div class="col-sm-7 col-md-8 no-padding xs-p-l-15 xs-p-r-15">
                        <img src="<?=Yii::getAlias('@web')?>/assets/images/logo_set.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>


