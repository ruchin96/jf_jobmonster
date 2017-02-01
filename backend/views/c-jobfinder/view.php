<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CJobfinder */

$this->title = $model->jobfinder_id;
$this->params['breadcrumbs'][] = ['label' => 'Cjobfinders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'jobfinder_id',
            'jobfinder_jobname',
            'jobfinder_jobdesc:ntext',
            'jobfinder_cover',
            'jobfinder_benefit:ntext',
            'jobfinder_jobreq:ntext',
            'jobfinder_howtoapply:ntext',
            [
            'attribute'=>'jobfinderSalaryoffer.salaryoffer_value',
            'label'=>'Jobfinder Salaryoffer',
            ],
            [
            'attribute'=>'jobfinderExplvl.explevel_name',
            'label'=>'Jobfinder Explvl',
            ],
            [
            'attribute'=>'jobfinderYearexp.yearexp_value',
            'label'=>'Jobfinder Yearexp',
            ],
            [
            'attribute'=>'jobfinderAcdegree.acdegree_name',
            'label'=>'Jobfinder Acdegree',
            ],
            [
            'attribute'=>'jobfinderDresscode.dresscode_name',
            'label'=>'Jobfinder Dresscode',
            ],
            [
            'attribute'=>'jobfinder_workinghours',
            'value'=>$model->jobfinder_workinghours.' Hours',
            ],
            'jobfinder_createdat',
            'jobfinder_updatedat',
            [
            'attribute'=>'jobfinderTimecategory.timecategory_name',
            'label'=>'Jobfinder Timecategory',
            ],
            [
            'attribute'=>'jobfinderCategory.jobcategory_name',
            'label'=>'Jobfinder Timecategory',
            ],
            [
            'attribute'=>'jobfinderLocation.location_name',
            'label'=>'Jobfinder Location',
            ],
            // 'jobfinder_location',
            'jobfinder_closedate',
            [
            'attribute'=>'jobfinder_statuspost',
            'format'=>'raw',
            'value'=>$model->jobfinder_statuspost == 'p' ? Html::tag('span', 'Draft', ['class'=>'label label-warning']) : Html::tag('span', 'Release', ['class'=>'label label-success']),
            ],
            // 'jobfinder_timecategory',
            // 'jobfinder_salaryoffer',
            // 'jobfinder_explvl',
            // 'jobfinder_yearexp',
            // 'jobfinder_acdegree',
            // 'jobfinder_dresscode',
            // 'jobfinder_id_company',
            // 'jobfinder_category',
            // 'jobfinder_statuspost',
            // 'jobfinder_workinghours',
    ],
]) ?>
