<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\Breadcrumbs;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ucfirst('year experience');
$this->params['breadcrumbs'][] = ['label' => $this->title, 'url' => ['index']];
$this->params['breadcrumbs'][] = ucfirst(Yii::$app->controller->action->id);

$dataProvider->pagination->pageSize=1;
?>

<div class="container-wrap">
    <div class="main-content container-fullwidth">
        <div id="content" class="content">

            <!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
            <?= Breadcrumbs::widget([
                  'homeLink' => [ 
                          'label' => Yii::t('yii', 'Dashboard'),
                          'url' => Yii::$app->homeUrl,
                     ],
                  'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
               ]) 
            ?>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Data <?=$this->title?> <small><button class="btn btn-success btn-sm m-r-5 btn-action-modal" value="<?=Url::to(['c-yearexperience/create'])?>" data-header="Add Data"><i class="fa fa-plus"></i> Add <?=$this->title?></button></small></h1>
            <!-- end page-header -->

            <div class="panel panel-inverse">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title">Panel - <?=$this->title?></h4>
                </div>
                
                <div class="panel-body">
                    <table id="data-table" class="table table-striped table-bordered nowrap" width="100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?=ucfirst('year experience')?> Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; foreach ($dataProvider->query as $query): ?>
                                <tr class="odd gradeX">
                                    <td><?=$i++;?></td>
                                    <td><?=$query['yearexp_value']?></td>
                                    <td>
                                        <button class="btn btn-info btn-xs m-r-5 btn-action-modal" value="<?=Url::to(['c-yearexperience/view','id'=>$query['yearexp_id']])?>" data-header="Data View"><i class="fa fa-eye"></i></button>

                                        <button class="btn btn-success btn-xs m-r-5 btn-action-modal" value="<?=Url::to(['c-yearexperience/update','id'=>$query['yearexp_id']])?>" data-header="Data Update"><i class="fa fa-cog"></i></button>

                                        <button class="btn btn-danger btn-xs m-r-5 btn-action-modal" value="<?=Url::to(['c-yearexperience/modal-delete','id'=>$query['yearexp_id']])?>" data-header="Data Delete"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>