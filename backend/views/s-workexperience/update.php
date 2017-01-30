<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SWorkexperience */

$this->title = 'Update Sworkexperience: ' . $model->work_id;
$this->params['breadcrumbs'][] = ['label' => 'Sworkexperiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->work_id, 'url' => ['view', 'id' => $model->work_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $model->work_id_res,
]) ?>
