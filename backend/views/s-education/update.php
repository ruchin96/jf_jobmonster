<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SEducation */

$this->title = 'Update Seducation: ' . $model->edu_id;
$this->params['breadcrumbs'][] = ['label' => 'Seducations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->edu_id, 'url' => ['view', 'id' => $model->edu_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $model->edu_id_res,
]) ?>
