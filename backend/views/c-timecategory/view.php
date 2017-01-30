<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CTimecategory */

$this->title = $model->timecategory_id;
$this->params['breadcrumbs'][] = ['label' => 'Ctimecategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'timecategory_id',
            'timecategory_name',
    ],
]) ?>
