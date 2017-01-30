<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SSeeker */

$this->title = 'Update Sseeker: ' . $model->seek_id;
$this->params['breadcrumbs'][] = ['label' => 'Sseekers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->seek_id, 'url' => ['view', 'id' => $model->seek_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
