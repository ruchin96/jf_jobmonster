<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CSalaryoffer */

$this->title = 'Update Csalaryoffer: ' . $model->salaryoffer_id;
$this->params['breadcrumbs'][] = ['label' => 'Csalaryoffers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->salaryoffer_id, 'url' => ['view', 'id' => $model->salaryoffer_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
