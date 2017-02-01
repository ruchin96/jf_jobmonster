<?php 
use yii\helpers\Url;

$con = Yii::$app->controller->id;
?>
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="<?=Yii::getAlias('@web')?>/template/assets/img/user-13.jpg" alt="" /></a>
                </div>
                <div class="info">
                    <?=Yii::$app->user->identity->username?>
                    <small>JoM Administrator</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation Jobfinder</li>
            <li class="has-sub <?=$con=='site'? 'active' : '' ?>">
                <a href="<?=Url::to(['site/index'])?>">
                    <i class="fa fa-laptop"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="has-sub <?=$con=='m-language' || $con=='m-location'? 'active' : '' ?>">
                <a href="javascript:;">
                    <span class="caret pull-right"></span>
                    <i class="fa fa-inbox"></i> 
                    <span>Attribut</span>
                </a>
                <ul class="sub-menu">
                    <li class="<?=$con=='m-language'? 'active' : '' ?>"><a href="<?=Url::to(['m-language/index'])?>">Language</a></li>
                    <li class="<?=$con=='m-location'? 'active' : '' ?>"><a href="<?=Url::to(['m-location/index'])?>">Location</a></li>
                </ul>
            </li>
            <li class="has-sub <?=($con=='c-company' || $con=='c-jobfinder' || $con=='c-companytype' || $con=='c-jobcategory' || $con=='c-salaryoffer' || $con=='c-acdegree' || $con=='c-yearexperience' || $con=='c-explevel' || $con=='c-dresscode' || $con=='c-timecategory') ? 'active' : '' ?>">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-suitcase"></i>
                    <span>Company <span class="label label-theme m-l-5">NEW</span></span> 
                </a>
                <ul class="sub-menu">
                    <li class="<?=($con=='c-company' || $con=='c-jobfinder' ) ? 'active' : '' ?>"><a href="<?=Url::to(['c-company/index'])?>">List Company</a></li>
                    <!-- <li><a href="<?=Url::to(['c-jobfinder/index'])?>">Job Finder</a></li> -->
                    <li class="<?=$con=='c-companytype' ? 'active' : '' ?>"><a href="<?=Url::to(['c-companytype/index'])?>">Company Type</a></li>
                    <li class="<?=$con=='c-jobcategory' ? 'active' : '' ?>"><a href="<?=Url::to(['c-jobcategory/index'])?>">Job Category</a></li>
                    <li class="<?=$con=='c-salaryoffer' ? 'active' : '' ?>"><a href="<?=Url::to(['c-salaryoffer/index'])?>">Salary Offer</a></li>
                    <li class="<?=$con=='c-acdegree' ? 'active' : '' ?>"><a href="<?=Url::to(['c-acdegree/index'])?>">Academic Degree Level</a></li>
                    <li class="<?=$con=='c-yearexperience' ? 'active' : '' ?>"><a href="<?=Url::to(['c-yearexperience/index'])?>">Total Year Experience</a></li>
                    <li class="<?=$con=='c-explevel' ? 'active' : '' ?>"><a href="<?=Url::to(['c-explevel/index'])?>">Experience Level</a></li>
                    <li class="<?=$con=='c-dresscode' ? 'active' : '' ?>"><a href="<?=Url::to(['c-dresscode/index'])?>">Dress Code</a></li>
                    <li class="<?=$con=='c-timecategory' ? 'active' : '' ?>"><a href="<?=Url::to(['c-timecategory/index'])?>">Time Category</a></li>

                </ul>
            </li>
            <li class="has-sub <?=($con=='s-seeker' || $con=='s-resume' || $con=='s-application' || $con=='s-highesdegree' || $con=='s-bookmark' || $con=='s-education' || $con=='s-skillsummary' || $con=='s-workexperience') ? 'active' : '' ?>">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-file-o"></i>
                    <span>Seeker <span class="label label-theme m-l-5">NEW</span></span> 
                </a>
                <ul class="sub-menu">
                    <li  class="<?=($con=='s-seeker' || $con=='s-resume' || $con=='s-application' || $con=='s-bookmark' || $con=='s-education' || $con=='s-skillsummary' || $con=='s-workexperience') ? 'active' : '' ?>"><a href="<?=Url::to(['s-seeker/index'])?>">List Seeker</a></li>
                    <!-- <li><a href="<?=Url::to(['s-resume/index'])?>">List Resume</a></li> -->
                    <!-- <li><a href="<?=Url::to(['s-application/index'])?>">Applying list <i class="fa fa-paper-plane text-theme"></i></a></li> -->
                    <li class="<?=$con=='s-highesdegree' ? 'active':''?>"><a href="<?=Url::to(['s-highesdegree/index'])?>">Highest Degree Level</a></li>
                    <!-- <li><a href="<?=Url::to(['s-bookmark/index'])?>">Bookmark Job</a></li> -->
                    <!-- <li><a href="<?=Url::to(['s-education/index'])?>">Education</a></li> -->
                    <!-- <li><a href="<?=Url::to(['s-skillsummary/index'])?>">Skill Summary</a></li> -->
                    <!-- <li><a href="<?=Url::to(['s-workexperience/index'])?>">Work Experience</a></li> -->
                </ul>
            </li>
            <li class="has-sub <?=($con=='m-role' || $con=='user' ) ? 'active' : '' ?>">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-th"></i>
                    <span>Users</span>
                </a>
                <ul class="sub-menu">
                    <li class="<?=$con=='user' ? 'active':''?>"><a href="<?=Url::to(['user/index'])?>">List User</a></li>
                    <li class="<?=$con=='m-role' ? 'active':''?>"><a href="<?=Url::to(['m-role/index'])?>">Role</a></li>
                </ul>
            </li>

            <li class="nav-header">Navigation Page</li>
            <li class="has-sub <?=($con=='b-post' || $con=='b-tag' || $con=='b-category' ) ? 'active' : '' ?>">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-tachometer"></i>
                    <span>Blog</span>
                </a>
                <ul class="sub-menu">
                    <li class="<?=$con=='b-post' ? 'active':''?>"><a href="<?=Url::to(['b-post/index'])?>">Post</a></li>
                    <li class="<?=$con=='b-tag' ? 'active':''?>"><a href="<?=Url::to(['b-tag/index'])?>">Tag</a></li>
                    <li class="<?=$con=='b-category' ? 'active':''?>"><a href="<?=Url::to(['b-category/index'])?>">Category</a></li>
                </ul>
            </li>
            <li class="has-sub <?=($con=='b-testimonial') ? 'active' : '' ?>">
                <a href="<?=Url::to(['b-testimonial/index'])?>">
                    <i class="fa fa-quote-left"></i>
                    <span>Testimonial</span>
                </a>
            </li>
            <li class="has-sub <?=($con=='b-feature') ? 'active' : '' ?>">
                <a href="<?=Url::to(['b-feature/index'])?>">
                    <i class="fa fa-fire"></i>
                    <span>Feature</span>
                </a>
            </li>
            <li class="has-sub <?=($con=='b-about' || $con=='b-team' ) ? 'active' : '' ?>">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-support"></i>
                    <span>Author</span>
                </a>
                <ul class="sub-menu">
                    <li class="<?=$con=='b-team' ? 'active':''?>"><a href="<?=Url::to(['b-team/index'])?>">Team</a></li>
                    <li class="<?=$con=='b-about' ? 'active':''?>"><a href="<?=Url::to(['b-about/index'])?>">About</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="<?=Yii::$app->urlManagerFrontend->createUrl(['site/index'])?>">
                    <span class="badge pull-right">Frontend</span>
                    <i class="fa fa-globe"></i>
                    <span>Visit Site</span>
                </a>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>