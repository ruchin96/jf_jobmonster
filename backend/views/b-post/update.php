<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BPost */

$this->title = 'Update Bpost: ' . $model->blog_id;
$this->params['breadcrumbs'][] = ['label' => 'Bposts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->blog_id, 'url' => ['view', 'id' => $model->blog_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
