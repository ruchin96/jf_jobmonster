<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SResume */

$this->title = 'Update Sresume: ' . $model->res_id;
$this->params['breadcrumbs'][] = ['label' => 'Sresumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->res_id, 'url' => ['view', 'id' => $model->res_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $model->res_id_seek,
]) ?>
