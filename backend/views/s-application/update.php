<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SApplication */

$this->title = 'Update Sapplication: ' . $model->app_id;
$this->params['breadcrumbs'][] = ['label' => 'Sapplications', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->app_id, 'url' => ['view', 'id' => $model->app_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $model->app_id_seek,
]) ?>
