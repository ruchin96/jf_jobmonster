<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SWorkexperience */

$this->title = $model->work_id;
$this->params['breadcrumbs'][] = ['label' => 'Sworkexperiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'work_id',
            'work_id_res',
            'work_company',
            'work_jobtitle',
            'work_start',
            'work_end',
            'work_note:ntext',
    ],
]) ?>
