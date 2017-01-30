<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="noo-page-heading">
    <div class="container-boxed max parallax-content">
        <div class="page-heading-info">
            <h1 class="page-title">Contact us </h1>
        </div>
    </div> 
    <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<section class="m-t-100 sm-m-t-30">
    <section class="container container-fixed-lg p-t-65 p-b-100  sm-p-b-30 sm-m-b-30">
        <div class="row">
            <div class="col-md-6">
                <h2>How can we assist you?</h2>
                <div class="p-r-40 sm-p-r-0">
                    <p>Despite the UI, We thought of the User experience, With attached From Layouts you can simply categories Important fields and prioritize them.</p>
                    <br>
                    <br>
                    <div class="panel" id="contact-panel">
                        <p class="semi-bold no-margin">Fill up this form to contact us if you have any futher questions</p>
                        <?php $form = ActiveForm::begin(['id' => 'contact-form', 'fieldConfig' => ['options' => ['tag' =>false]]]); ?>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group form-group-default required">
                                    <?=$form->field($model, 'name', ['inputOptions' => ['placeholder' => 'Firstname']])->textInput(['autofocus' => true, 'class' => 'form-control'])->label("First Name")?>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group form-group-default">
                                    <?= $form->field($model, 'name', ['inputOptions' => ['placeholder' => 'Lastname']])->textInput(['autofocus' => true, 'class' => 'form-control'])->label("Last Name") ?>
                                </div>
                            </div>
                        </div>
                        <div class="form-group form-group-default required">
                            <?=$form->field($model, 'email', ['inputOptions' => ['placeholder' => 'This can be changed later']])->textInput(['autofocus' => true, 'class' => 'form-control'])->label("Email")?>
                        </div>
                        <div class="form-group form-group-default required">
                            <?=$form->field($model, 'subject', ['inputOptions' => ['placeholder' => 'Input the subject here']])->textInput(['autofocus' => true, 'class' => 'form-control'])->label("Subject")?>
                        </div>
                        <div class="form-group form-group-default">
                            <?=$form->field($model, 'body', ['inputOptions' => ['placeholder' => 'Type the message you wish to send']])->textarea(['rows' => 6, 'class' => 'form-control', 'style' => 'height:100px'])->label("Message")?>
                        </div>
                        <?=$form->field($model, 'verifyCode')->widget(Captcha::className(), ['template' => '<div class="row"><div class="col-lg-4">{image}</div><div class="col-lg-8">{input}</div></div>',])?>
                        <div class="sm-p-t-10 clearfix">
                            <p class="pull-left small hint-text m-t-5 font-arial">I hereby certify that the information above is true and accurate. </p>
                            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary font-montserrat all-caps fs-12 pull-right xs-pull-left', 'name' => 'contact-button']) ?>
                        </div>
                        <div class="clearfix"></div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="visible-xs visible-sm b-b b-grey-light m-t-35 m-b-30"></div>
                <div class="p-l-40 sm-p-l-0 sm-p-t-10">
                    <h3>Showcase and guide users with a <br>
                        better User Interface &amp; Experience.</h3>
                    <p>Our motivation "Perfection simplified" helps to craft meaningful experiences for the people around us,This mission inspires us to jump out of bed each day and guides every aspect of what we do.</p>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <h5 class="block-title hint-text m-b-0">East Java, Indonesia. </h5>
                            <address class="m-t-10">Rungkut, Surabaya.
                                <br> Griya Amerta Regency Block J-23
                                <br> East Medayu 60122
                            </address>
                            <br>
                            <p class="hint-text no-margin"><span class="fs-12 font-montserrat bold all-caps p-r-10">Phone</span> <span class="fs-14">(62) 813-3536-5182</span></p>
                        </div>
                        <div class="col-sm-6">
                            <h5 class="block-title hint-text m-b-0">&nbsp;</h5>
                            <address class="m-t-10">Sukolilo, Surabaya.
                                <br> ITS University
                                <br> Electronic Engineering Polytechnic Institute of Surabaya 60111
                            </address>
                            <p class="hint-text no-margin"><span class="fs-12 font-montserrat bold all-caps p-r-10">Phone</span> <span class="fs-14">(62) 857-3166-3633</span></p>
                        </div>
                    </div>
                    <br>
                    <h5 class="block-title hint-text m-b-0">JobMonster Public Inquiries &amp; Communications </h5>
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="fs-12 font-montserrat bold all-caps no-margin hint-text">Hotline </p>
                            <p class="hint-text no-margin fs-14">(62) 813-3536-5182</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="fs-12 font-montserrat bold all-caps no-margin hint-text">Email </p>
                            <p class="hint-text no-margin fs-14"><a href="mailto:jobmonster.cs@gmail.com"> jobmonster.cs@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="container-fluid  no-padding no-overflow">

        <div id="google-map" class="full-width demo-map gradient-overlay no-overflow"></div>
    </section>
</section>
    