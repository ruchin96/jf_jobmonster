<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BTag */

$this->title = 'Update Btag: ' . $model->tag_id;
$this->params['breadcrumbs'][] = ['label' => 'Btags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tag_id, 'url' => ['view', 'id' => $model->tag_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
