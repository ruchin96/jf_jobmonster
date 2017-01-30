<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CJobcategory */

$this->title = $model->jobcategory_id;
$this->params['breadcrumbs'][] = ['label' => 'Cjobcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'jobcategory_id',
            'jobcategory_name',
    ],
]) ?>
