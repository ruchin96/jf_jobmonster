<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CCompany */

$this->title = 'Create Ccompany';
$this->params['breadcrumbs'][] = ['label' => 'Ccompanies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
