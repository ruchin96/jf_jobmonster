<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SResume */

$this->title = $model->res_id;
$this->params['breadcrumbs'][] = ['label' => 'Sresumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'res_id',
            // 'res_id_seek',
            [
            'attribute'=>'resIdSeek.seek_name',
            'label'=>'Seeker Name',
            ],
            'res_title',
            // 'res_id_language',
            [
            'attribute'=>'resIdLanguage.language_name',
            'label'=>'Language Name',
            ],
            // 'res_id_hidegree',
            [
            'attribute'=>'resIdHidegree.hdegree_name',
            'label'=>'High Degree',
            ],
            // 'res_id_yearexp',
            [
            'attribute'=>'resIdYearexp.yearexp_value',
            'label'=>'Year Exp',
            ],
            // 'res_id_jobcategory',
            [
            'attribute'=>'resIdJobcategory.jobcategory_name',
            'label'=>'Job Category',
            ],
            // 'res_id_joblevel',
            [
            'attribute'=>'resIdJoblevel.explevel_name',
            'label'=>'Job Level',
            ],
            'res_joblocation',
            'res_attachment',
            'res_selfdesc:ntext',
            // 'res_statuspost',
            [
            'attribute'=>'res_statuspost',
            'format'=>'raw',
            'value'=>$model->res_statuspost == 'p' ? Html::tag('span', 'Draft', ['class'=>'label label-warning']) : Html::tag('span', 'Release', ['class'=>'label label-success']),
            ],
            'res_createdat',
            'res_updatedat',
    ],
]) ?>
