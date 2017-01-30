<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;

$formatter = Yii::$app->formatter;
?>
<div class="container-wrap">
    <div class="main-content container-fullwidth">
        <div class="row">
            <div class="noo-main col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="noo-job-search-wrapper">
                            <div class="job-search-bg-image"></div>
                            <div class="job-advanced-search column-4">
                                <div class="job-search-info text-center">
                                    <p class="search-top-title">JobMonster Firstallium.inc</p>
                                    <h3 class="search-main-title">Join us &amp; Explore thousands of Jobs</h3>
                                </div>
                                <div class="job-advanced-search-wrap">
                                    <?php $form = ActiveForm::begin(['method' => 'get','options' => ['class'=>'form-inline']])?>
                                    <!-- <form class="form-inline"> -->
                                        <div class="job-advanced-search-form">
                                            <div class="form-group">
                                                <label class="sr-only" for="search-keyword">keyword</label>
                                                <input type="text" class="form-control" id="search-keyword" name="jobfinder_jobname" placeholder="keyword" value="">
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only">Category</label>
                                                <div class="advance-search-form-control">
                                                    <select name="jobfinder_category" class="form-control-chosen form-control">
                                                        <option class="text-placeholder" value="">all category</option>
                                                        <?php foreach ($jobcategory as $jc) {
                                                            echo '<option value="'.$jc['jobcategory_id'].'">'.$jc['jobcategory_name'].'</option>';
                                                        }?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="search-keyword">Location</label>
                                                <input type="text" class="form-control" id="search-keyword" name="jobfinder_location" placeholder="location" value="">
                                            </div>
                                            <div class="form-group form-action">
                                                <button type="submit" class="btn btn-primary btn-search-submit">Search</button>
                                            </div>
                                        </div>
                                    <!-- </form> -->
                                    <?php ActiveForm::end(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-primary">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="noo-step-icon clearfix">
                                    <?php if(Yii::$app->user->isGuest){?>
                                    <ul class="noo-step-icon-3">
                                        <li>
                                            <span class="noo-step-icon-item">
                                                <a href="#">
                                                    <span class="fa fa-key noo-step-icon-class"></span>
                                                    <span class="noo-step-icon-title">
                                                        Register an account to start
                                                    </span>
                                                </a>
                                            </span>
                                        </li>
                                        <?php } else {?>
                                            <ul class="noo-step-icon-2">
                                        <?php } ?>
                                        <li>
                                            <span class="noo-step-icon-item">
                                                <a href="#">
                                                    <span class="fa fa-search-plus noo-step-icon-class"></span>
                                                    <span class="noo-step-icon-title">
                                                        Specify &amp; search your desired job
                                                    </span>
                                                </a>
                                            </span>
                                        </li>
                                        <li>
                                            <span class="noo-step-icon-item">
                                                <a href="#">
                                                    <span class="fa fa-file-text-o noo-step-icon-class"></span>
                                                    <span class="noo-step-icon-title">
                                                        Send your resume to employers
                                                    </span>
                                                </a>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-10 pb-10 bg-white">
                    <div class="container-boxed max">
                        <div class="col-md-8 col-sm-12">
                            <div class="jobs posts-loop jobs-shortcode">
                                <div class="posts-loop-title">
                                    <h3>Recent Jobs</h3>
                                </div>
                                <div class="posts-loop-content">
                                    <div class="posts-loop-content">
                                        <?php foreach ($recentjob as $job) {?>
                                        <article class="noo_job hentry">
                                            <div class="loop-item-wrap">
                                                <div class="item-featured">
                                                    <a href="#">
                                                        <?php if(is_null($job['jobfinderIdCompany']['company_logo'])){?>
                                                            <img width="222" height="131" src="<?=Yii::getAlias('@web')?>/template/images/company/about-img.png" alt="Villa Senang"/>
                                                        <?php } else { ?>
                                                            <img width="222" height="131" src="<?=Yii::getAlias('@web')?>/uploads/company/company_logo/<?=$job['jobfinderIdCompany']['company_id'].'/'.$job['jobfinderIdCompany']['company_logo']?>" alt="Villa Senang"/>
                                                        <?php } ?>
                                                    </a>
                                                </div>
                                                <div class="loop-item-content">
                                                    <h2 class="loop-item-title">
                                                        <a href="#"><?=$job['jobfinder_jobname']?></a>
                                                    </h2>
                                                    <p class="content-meta">
                                                        <span class="job-company">
                                                            <a href="#"><?=$job['jobfinderIdCompany']['company_name']?></a>
                                                        </span>
                                                        <span class="job-type <?=$job['jobfinder_timecategory'] == 1 ? 'freelencer' : ($job['jobfinder_timecategory'] == 2 ? 'part-time': ($job['jobfinder_timecategory'] == 3 ? 'full-time' : 'contract'))?>">
                                                            <a href="#">
                                                                <i class="fa fa-bookmark"></i><?=$job['jobfinderTimecategory']['timecategory_name']?>
                                                            </a>
                                                        </span>
                                                        <span class="job-location">
                                                            <i class="fa fa-map-marker"></i>
                                                            <a href="#"><em><?=$job['jobfinder_location']?></em></a>
                                                        </span>
                                                        <span>
                                                            <time class="entry-date" datetime="2015-08-18T01:40:23+00:00">
                                                                <i class="fa fa-calendar"></i>
                                                                <?= $formatter->asDate($job['jobfinder_createdat'], 'long')?>
                                                                - <?= $formatter->asDate($job['jobfinder_closedate'], 'long')?>
                                                            </time>
                                                        </span>
                                                    </p>
                                                </div>
                                                <div class="show-view-more">
                                                    <a class="btn btn-primary" href="<?=Url::to(['jobs-detail','id'=>$job['jobfinder_id']])?>">View more </a>
                                                </div>
                                            </div>
                                        </article>
                                        <?php } ?>
                                    </div>
                                    <div class="loadmore-action">
                                        <a href="<?=Url::to(['site/joblist', 'page'=>1])?>" class="btn btn-default btn-block btn-loadmore">Load More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="jobs posts-loop jobs-shortcode slider job-slider">
                                <div class="posts-loop-title">
                                    <h3>Featured Jobs</h3>
                                </div>
                                <div class="pagination list-center">
                                    <a href="#" id="prev" class="prev page-numbers">
                                        <i class="fa fa-long-arrow-left"></i>
                                    </a>
                                    <a href="#" id="next" class="next page-numbers">
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                                <ul class="posts-loop-content">
                                    <li class="slider_post">
                                        <div class="img-thumb">
                                            <a href="#">
                                                <img src="<?=Yii::getAlias('@web')?>/template/images/job/img-defaul-02.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <article class="noo_job hentry">
                                            <div class="loop-item-wrap">
                                                <div class="item-title-bar">
                                                    <div class="item-featured">
                                                        <a href="#">
                                                            <img width="300" height="300" src="<?=Yii::getAlias('@web')?>/template/images/company/evernote.png" alt="Vincom Group"/>
                                                        </a>
                                                    </div>
                                                    <div class="items">
                                                        <h4 class="item-title">
                                                            <a href="#">Product Designer </a>
                                                        </h4>
                                                        <h4 class="item-company">
                                                            <a href="#">Vincom Group </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <span class="job-type full-time">
                                                        <a href="#">
                                                            <i class="fa fa-bookmark"></i>
                                                            Full Time
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="item-excerpt">
                                                    Job Description Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. 
                                                </div>
                                                <div class="item-view-more">
                                                    <a class="btn btn-primary" href="jobs-detail.html">View more </a>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                    <li class="slider_post">
                                        <div class="img-thumb">
                                            <a href="#">
                                                <img src="<?=Yii::getAlias('@web')?>/template/images/job/img-defaul-02.jpg" alt=""/>
                                            </a>
                                        </div>
                                        <article class="noo_job hentry">
                                            <div class="loop-item-wrap">
                                                <div class="item-title-bar">
                                                    <div class="item-featured">
                                                        <a href="#">
                                                            <img width="300" height="300" src="<?=Yii::getAlias('@web')?>/template/images/company/bmw.png" alt="Wild West Company"/>
                                                        </a>
                                                    </div>
                                                    <div class="items">
                                                        <h4 class="item-title">
                                                            <a href="#">Vendor Sales Manager </a>
                                                        </h4>
                                                        <h4 class="item-company">
                                                            <a href="#">Wild West Company </a>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="item-info">
                                                    <span class="job-type full-time">
                                                        <a href="#">
                                                            <i class="fa fa-bookmark"></i>
                                                            Full Time
                                                        </a>
                                                    </span>
                                                </div>
                                                <div class="item-excerpt">
                                                    Job Description Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit. Nulla porttitor accumsan tincidunt. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Donec sollicitudin molestie malesuada. 
                                                </div>
                                                <div class="item-view-more">
                                                    <a class="btn btn-primary" href="jobs-detail.html">View more </a>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-gray pt-5 pb-5 bg-dark">
                    <div class="col-md-12">
                        <div class="container-boxed max">
                            <div class="noo-text-block pt-1 pb-1">
                                <h3 class="text-center">
                                    <strong>Featured Employer </strong>
                                </h3>
                                <p class="text-center">
                                    <em>Donec ut condimentum dui. Mauris vestibulum eros lacus, in ultricies nulla malesuada ac. Praesent semper leo a libero ultrices tempus.</em>
                                </p>
                            </div>
                            <div class="featured_slider">
                                <div id="slider_employer">
                                    <div class='bg_images'>
                                        <a href='#' target='_blank'>
                                            <img src='<?=Yii::getAlias('@web')?>/template/images/company/volkswagen.png' alt=''/>
                                        </a>
                                    </div>
                                    <div class='bg_images'>
                                        <a href='#' target='_blank'>
                                            <img src='<?=Yii::getAlias('@web')?>/template/images/company/apple-touch-icon.png' alt=''/>
                                        </a>
                                    </div>
                                    <div class='bg_images'>
                                        <a href='#' target='_blank'>
                                            <img src='<?=Yii::getAlias('@web')?>/template/images/company/dropbox.png' alt=''/>
                                        </a>
                                    </div>
                                    <div class='bg_images'>
                                        <a href='#' target='_blank'>
                                            <img src='<?=Yii::getAlias('@web')?>/template/images/company/pepsi.png' alt=''/>
                                        </a>
                                    </div>
                                    <div class='bg_images'>
                                        <a href='#' target='_blank'>
                                            <img src='<?=Yii::getAlias('@web')?>/template/images/company/johnnie_walker.png' alt=''/>
                                        </a>
                                    </div>
                                    <div class='bg_images'>
                                        <a href='#' target='_blank'>
                                            <img src='<?=Yii::getAlias('@web')?>/template/images/company/creative.png' alt=''/>
                                        </a>
                                    </div>
                                    <div class='bg_images'>
                                        <a href='#' target='_blank'>
                                            <img src='<?=Yii::getAlias('@web')?>/template/images/company/porsche.png' alt=''/>
                                        </a>
                                    </div>
                                    <div class='bg_images'>
                                        <a href='#' target='_blank'>
                                            <img src='<?=Yii::getAlias('@web')?>/template/images/company/evernote.png' alt='#'/>
                                        </a>
                                    </div>
                                    <div class='bg_images'>
                                        <a href='#' target='_blank'>
                                            <img src='<?=Yii::getAlias('@web')?>/template/images/company/bmw.png' alt=''/>
                                        </a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="page pag_slider_employer"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-image pt-10 pb-10">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container-boxed max">
                                <div class="featured_slider">
                                    <div id="slider_testimonial">
                                        <?php $i = 0; foreach ($testimonial as $tm) {?>
                                        <div class="box_testimonial">
                                            <div class="box-content">
                                                <p>
                                                    <?=$tm['testimonial_body']?>
                                                </p>
                                            </div>
                                            <div class="icon"></div>
                                            <div class="box-info">
                                                <div class="box-info-image">
                                                    <?=$tm['testimonial_picture'] == null ? 
                                                        Html::img(Yii::getAlias('@web')."/uploads/team/testimonial_picture/default/User.png", ['alt'=>'myImage','width'=>'70','height'=>'50']) 
                                                        : 
                                                        Html::img(Yii::getAlias('@web')."/uploads/team/testimonial_picture/".$tm['testimonial_id']."/".$tm['testimonial_picture'], ['alt'=>'myImage','width'=>'70','height'=>'50'])?>
                                                    <!-- <img src="<?=Yii::getAlias('@web')?>/template/images/testimonial/candidate_03.jpg" alt=""/> -->
                                                </div>
                                                <div class="box-info-entry">
                                                    <h4><?=$tm['testimonial_name']?></h4>
                                                    <h5><?=$tm['testimonial_jobtitle']?> - <?=$tm['testimonial_company']?></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="page pag_slider_testimonial"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-gray pt-10 pb-10">
                    <div class="col-md-12">
                        <div class="noo-text-block">
                            <h3 class="text-center">What JobMonster Featured</h3>
                            <p class="text-center text-italic">
                                This the feature which can support seeker to find job vacancy and help company to find a candidate to hire.
                            </p>
                        </div>
                        <div class="container-boxed max">
                            <div class="row pt-5 pb-2">
                                <?php $i = 0; foreach ($features as $feature) {?>
                                <div class="col-md-4 col-sm-6">
                                    <div class="noo-text-block">
                                        <p>
                                            <span class="text-primary pr-2">
                                                <span class="noo-icon features-icon icon-circle">
                                                    <i class="fa <?=$feature['feature_icon']?>"></i>
                                                </span>
                                            </span>
                                            <strong><?=$feature['feature_name']?></strong><br/>
                                            <?=$feature['feature_body']?>
                                        </p>
                                    </div>
                                </div>
                                    <?php if ($i++ == 2) {?>
                                        </div>
                                    </div>
                                    <div class="container-boxed max">
                                        <div class="row pt-2 pb-2">
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row bg-white pt-10 pb-10">
                    <div class="container-boxed max">
                        <div class="col-md-12">
                            <div class="noo-text-block">
                                <h3 class="text-center">From Our Blog</h3>
                                <p class="text-center text-italic">
                                    Etiam imperdiet pulvinar nisl, eu iaculis justo efficitur in.
                                </p>
                            </div>
                            <hr class="noo-gap mt-4"/>
                            <div class="noo-recent-news posts-loop grid">
                                <div class="row">
                                    <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                        <div class="loop-item-wrap">
                                            <div class="loop-item-featured">
                                                <a href="#">
                                                    <img width="600" height="450" src="<?=Yii::getAlias('@web')?>/template/images/blog/blog_9.jpg" alt="blog_9"/>
                                                </a>
                                            </div>
                                            <div class="loop-item-content">
                                                <h2 class="loop-item-title">
                                                    <a href="blog-detail.html">
                                                        Career Fair 2015: Over 500 Jobs From Great Employers
                                                    </a>
                                                </h2>
                                                <p class="content-meta">
                                                    <span>
                                                        <i class="fa fa-file-image-o"></i>
                                                        under <a href="#">News</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                        <div class="loop-item-wrap">
                                            <div class="loop-item-featured">
                                                <a href="#">
                                                    <img width="600" height="450" src="<?=Yii::getAlias('@web')?>/template/images/blog/blog_8.jpg" alt="blog_8"/>
                                                </a>
                                            </div>
                                            <div class="loop-item-content">
                                                <h2 class="loop-item-title">
                                                    <a href="blog-detail.html">
                                                        10 Best Tech Companies To Work For 2014
                                                    </a>
                                                </h2>
                                                <p class="content-meta">
                                                    <span>
                                                        <i class="fa fa-file-image-o"></i>
                                                        under <a href="#">News</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                        <div class="loop-item-wrap">
                                            <div class="loop-item-featured">
                                                <a href="#">
                                                    <img width="600" height="450" src="<?=Yii::getAlias('@web')?>/template/images/blog/blog_13.jpg" alt="blog_13"/>
                                                </a>
                                            </div>
                                            <div class="loop-item-content">
                                                <h2 class="loop-item-title">
                                                    <a href="blog-detail.html">
                                                        Back To Work After Vacation
                                                    </a>
                                                </h2>
                                                <p class="content-meta">
                                                    <span>
                                                        <i class="fa fa-file-image-o"></i>
                                                        under <a href="#">Productivity</a>, <a href="#">Skills</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                        <div class="loop-item-wrap">
                                            <div class="loop-item-featured">
                                                <a href="#">
                                                    <img width="600" height="450" src="<?=Yii::getAlias('@web')?>/template/images/blog/blog_11.jpg" alt="blog_11"/>
                                                </a>
                                            </div>
                                            <div class="loop-item-content">
                                                <h2 class="loop-item-title">
                                                    <a href="blog-detail.html">
                                                        How To Get Out Of Stress At Work
                                                    </a>
                                                </h2>
                                                <p class="content-meta">
                                                    <span>
                                                        <i class="fa fa-file-image-o"></i>
                                                        under <a href="#">News</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                        <div class="loop-item-wrap">
                                            <div class="loop-item-featured">
                                                <a href="#">
                                                    <img width="600" height="450" src="<?=Yii::getAlias('@web')?>/template/images/blog/blog_4.jpg" alt="blog_4"/>
                                                </a>
                                            </div>
                                            <div class="loop-item-content">
                                                <h2 class="loop-item-title">
                                                    <a href="blog-detail.html">
                                                        Job Motivational Quote
                                                    </a>
                                                </h2>
                                                <p class="content-meta">
                                                    <span>
                                                        <i class="fa fa-file-image-o"></i>
                                                        under <a href="#">Career Advice</a>, <a href="#">Productivity</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noo-rn-item loop-item col-md-6 col-sm-6">
                                        <div class="loop-item-wrap">
                                            <div class="loop-item-featured">
                                                <a href="#">
                                                    <img width="600" height="450" src="<?=Yii::getAlias('@web')?>/template/images/blog/blog_3.jpg" alt="blog_3"/>
                                                </a>
                                            </div>
                                            <div class="loop-item-content">
                                                <h2 class="loop-item-title">
                                                    <a href="blog-detail.html">
                                                        Our Blog Theme
                                                    </a>
                                                </h2>
                                                <p class="content-meta">
                                                    <span>
                                                        <i class="fa fa-file-image-o"></i>
                                                        under <a href="#">News</a> by <a href="#">John Doe</a> on Jan 19th,2015 
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-primary-overlay bg-image bg-parallax pt-5 pb-0">
                    <div class="col-md-12 parallax-content">
                        <div class="container-boxed max">
                            <div class="row pt-2 pb-0">
                                <div class="col-md-6 col-sm-12 pr-8">
                                    <img src="<?=Yii::getAlias('@web')?>/template/images/app-device.png" alt="app-device" class="noo-image">
                                </div>
                                <div class="col-md-6 col-sm-12 pt-10">
                                    <div class="noo-text-block">
                                        <div class="app-section white">
                                            <h3 class="white">Get JobMonster App for your mobile</h3>
                                            <p>Searching for jobs never been that easy. Now you can find job matched your career expectation, apply for jobs and receive feedback right on your mobile. Get JobMonster mobile app and start your job search now!</p>
                                            <img class="mr-2 mt-3" src="<?=Yii::getAlias('@web')?>/template/images/app-googleplay.png" alt="customer"/>
                                            <img class="mt-3" src="<?=Yii::getAlias('@web')?>/template/images/app-appstore.png" alt="customer"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="parallax app" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
                </div>
            </div>  
        </div> 
    </div> 
</div>