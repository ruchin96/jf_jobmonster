<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BCategory */

$this->title = 'Update Bcategory: ' . $model->category_id;
$this->params['breadcrumbs'][] = ['label' => 'Bcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->category_id, 'url' => ['view', 'id' => $model->category_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
