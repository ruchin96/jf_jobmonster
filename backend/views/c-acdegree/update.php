<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CAcdegree */

$this->title = 'Update Cacdegree: ' . $model->acdegree_id;
$this->params['breadcrumbs'][] = ['label' => 'Cacdegrees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->acdegree_id, 'url' => ['view', 'id' => $model->acdegree_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
