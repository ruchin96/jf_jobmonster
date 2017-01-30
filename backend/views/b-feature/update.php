<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BFeature */

$this->title = 'Update Bfeature: ' . $model->feature_id;
$this->params['breadcrumbs'][] = ['label' => 'Bfeatures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->feature_id, 'url' => ['view', 'id' => $model->feature_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
