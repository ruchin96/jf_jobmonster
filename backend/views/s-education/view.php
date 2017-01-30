<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SEducation */

$this->title = $model->edu_id;
$this->params['breadcrumbs'][] = ['label' => 'Seducations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'edu_id',
            'edu_id_res',
            'edu_sname',
            'edu_qualify',
            'edu_start',
            'edu_end',
            'edu_note:ntext',
    ],
]) ?>
