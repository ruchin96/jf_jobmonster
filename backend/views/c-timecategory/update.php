<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CTimecategory */

$this->title = 'Update Ctimecategory: ' . $model->timecategory_id;
$this->params['breadcrumbs'][] = ['label' => 'Ctimecategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->timecategory_id, 'url' => ['view', 'id' => $model->timecategory_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
