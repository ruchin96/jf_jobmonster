<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SHighesdegree */

$this->title = 'Update Shighesdegree: ' . $model->hdegree_id;
$this->params['breadcrumbs'][] = ['label' => 'Shighesdegrees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hdegree_id, 'url' => ['view', 'id' => $model->hdegree_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
