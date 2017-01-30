<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CJobfinder */

$this->title = 'Update Cjobfinder: ' . $model->jobfinder_id;
$this->params['breadcrumbs'][] = ['label' => 'Cjobfinders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->jobfinder_id, 'url' => ['view', 'id' => $model->jobfinder_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>