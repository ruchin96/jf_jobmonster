<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CJobcategory */

$this->title = 'Update Cjobcategory: ' . $model->jobcategory_id;
$this->params['breadcrumbs'][] = ['label' => 'Cjobcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jobcategory_id, 'url' => ['view', 'id' => $model->jobcategory_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
