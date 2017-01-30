<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CCompany */

$this->title = 'Update Ccompany: ' . $model->company_id;
$this->params['breadcrumbs'][] = ['label' => 'Ccompanies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->company_id, 'url' => ['view', 'id' => $model->company_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
