<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\MLocation */

$this->title = 'Update Mlocation: ' . $model->location_id;
$this->params['breadcrumbs'][] = ['label' => 'Mlocations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->location_id, 'url' => ['view', 'id' => $model->location_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
