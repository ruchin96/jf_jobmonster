<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CCompanytype */

$this->title = 'Update Ccompanytype: ' . $model->companytype_id;
$this->params['breadcrumbs'][] = ['label' => 'Ccompanytypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->companytype_id, 'url' => ['view', 'id' => $model->companytype_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
