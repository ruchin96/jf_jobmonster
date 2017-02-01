<?php
use yii\web\View;
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

// var_dump(Yii::getAlias('@frontend').'/assets/uploads/company/company_logo/');die();
/* @var $this \yii\web\View */
/* @var $content string */
$this->title="Firstallium";
$modalHeader = null;

AppAsset::register($this);
$datenow = date('Y-m-d H:i:s');
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
        <style type="text/css">
            #datepicker-autoClose{z-index:1151 !important;}
        </style>
        <?php $this->head() ?>
    </head>
    <body>
        <!-- begin #page-loader -->
        <div id="page-loader" class="fade in"><span class="spinner"></span></div>
        <!-- end #page-loader -->
        
        <!-- begin #page-container -->
        <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
            <!-- begin #header -->
            <?=$this->render('page_header')?>
            <!-- end #header -->
            
            <!-- begin #sidebar -->
            <?=$this->render('page_sidebar')?>
            <!-- end #sidebar -->
            
            <!-- begin #content -->
            <?=$content?>
            <!-- end #content -->
            
            <!-- begin theme-panel -->
            <?=$this->render('page_theme')?>
            <!-- end theme-panel -->
            
            <!-- begin scroll to top btn -->
            <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
            <!-- end scroll to top btn -->
        </div>

        <div class="modal fade" id="allModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <!--content here-->
                    </div>
                    <div class="modal-footer">
                        <a href="javascript:;" class="btn btn-sm btn-white" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <?php 
        $my_js = "
        $(function(){
            App.init();
            Dashboard.init();
            TableManageResponsive.init();
            FormPlugins.init();

            $(window).load(function(){
                $.gritter.add({
                    title:\"Welcome back, Admin!\",
                    text:\"You have a permission to running all the action in this backend\",
                });
            });
            
            $('.btn-action-modal').click(function(e){
                e.preventDefault();
                var url = $(this).val();
                var title = $(this).data('header');
                // console.log(title);
                $.ajax({
                  url: url,
                  type:'GET',
                  cache: false,
                  success: function(data){
                      // alert(data);  
                      $('#allModal .modal-title').text(title);
                      $('#allModal .modal-body').html(data);                
                      $('#allModal').modal('show');
                  }
                });
            });

            $('.btn-reload').on('click',function(e){
                e.preventDefault();
                setTimeout(function(){
                    // $('tbody').load(location.href + ' tr')
                    // alert('asas');
                    // $('.container-wrap').load($(this).attr('href'));
                },2000);
            });

            $('.modal-body').on('submit','form',function (e) {
                e.preventDefault();
                var form = $(this);

                $.post(
                    form.attr('action'),
                    form.serialize()
                ).done(function(result){
                    if (result == 1) {
                        $('.message').html('<div class=\"note note-success\"> <strong>Success!</strong> Data added successfully</div>');
                        setTimeout(function(){
                            $('#allModal').modal('hide');
                            $.gritter.add({title:\"Success adding a new item!\",text:\"Item which you add will appear on the last of table.\"});
                        },2000);
                    }else{
                        $('.message').html('<div class=\"note note-danger\"> <strong>Failed!</strong> Check There any field need to fill</div>');
                    }
                }).fail(function(){
                    console.log('server error');
                });
                return false;
            });

        });";
        $this->registerJs($my_js,View::POS_END);
        ?>
        <!-- end page container -->
        <?php $this->endBody() ?>
    </body>
</html> 
<?php $this->endPage() ?>
