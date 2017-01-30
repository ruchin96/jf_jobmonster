<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SBookmark */

$this->title = 'Update Sbookmark: ' . $model->bookmark_id;
$this->params['breadcrumbs'][] = ['label' => 'Sbookmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->bookmark_id, 'url' => ['view', 'id' => $model->bookmark_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $model->bookmark_id_user,
]) ?>
