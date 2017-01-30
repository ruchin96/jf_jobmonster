<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CYearexperience */

$this->title = 'Update Cyearexperience: ' . $model->yearexp_id;
$this->params['breadcrumbs'][] = ['label' => 'Cyearexperiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->yearexp_id, 'url' => ['view', 'id' => $model->yearexp_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
