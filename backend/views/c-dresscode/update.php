<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CDresscode */

$this->title = 'Update Cdresscode: ' . $model->dresscode_id;
$this->params['breadcrumbs'][] = ['label' => 'Cdresscodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->dresscode_id, 'url' => ['view', 'id' => $model->dresscode_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
