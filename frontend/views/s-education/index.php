<?php
use yii\helpers\Url;
$this->title = 'Education';
// var_dump($sresume);die();
?>
<div class="noo-page-heading">
    <div class="container-boxed max parallax-content">
        <div class="page-heading-info">
            <h1 class="page-title"><i class="fa fa-institution"></i> Education Record</h1>
            <em style="color: white;"><strong>For Resume title :</strong> <?=$sresume['res_title']?>.</em>
        </div>
    </div> 
    <div class="parallax heading" data-parallax="1" data-parallax_no_mobile="1" data-velocity="0.1"></div>
</div>
<?=$this->render('_header')?>
<div class="container-wrap">
    <div class="main-content container-boxed max offset">
        <div class="row">
            <div class="noo-main col-md-12">
                <div class="member-manage">
                    <form>
                        <div class="member-manage-table">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Instantion</th>
                                        <th class="hidden-xs">Qualify</th>
                                        <th class="hidden-xs hidden-sm">Date Start</th>
                                        <th class="hidden-xs hidden-sm">Date End</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if(count($dataProvider->query)>0){?>
                                <?php foreach ($dataProvider->query as $education) {?>
                                    <tr>
                                        <td class="title-col">
                                            <strong><?=$education['edu_sname']?></strong>
                                        </td>
                                        <td class="hidden-xs category-col">
                                            <em><?=$education['edu_qualify']?></em>
                                        </td>
                                        <td class="hidden-xs hidden-sm location-col">
                                            <i class="fa fa-calendar"></i>&nbsp;<em><?=$education['edu_start']?></em>
                                        </td>
                                        <td class="hidden-xs hidden-sm location-col">
                                            <i class="fa fa-calendar"></i>&nbsp;<em><?=$education['edu_end']?></em>
                                        </td>
                                        <td class="member-manage-actions text-center">
                                            <a href="#" data-url="<?=Url::to(['s-education/view', 'id'=>$education['edu_id']])?>" class="member-manage-action modal-btn" data-toggle="tooltip" title="Edit education">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="#" data-url="<?=Url::to(['s-education/update', 'id'=>$education['edu_id']])?>" class="member-manage-action modal-btn" data-toggle="tooltip" title="Edit education">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a href="#" class="member-manage-action action-delete modal-btn" data-url="<?=Url::to(['s-education/modal-delete', 'id'=>$education['edu_id']])?>" data-toggle="tooltip" title="Delete education">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <?php } else { ?>
                                    <div class="well well-sm text-center bg-primary"><p class="widget-title "><i class="fa fa-warning"></i>  There's no education in </p></div>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="member-manage-toolbar bottom-toolbar clearfix">
                            <div class="member-manage-page pull-left">
                                <a href="#" class="btn btn-primary modal-btn" data-url="<?=Url::to(['s-education/create', 'id'=>$sresume['res_id']])?>">Create New Education</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>  
        </div> 
    </div> 
</div>