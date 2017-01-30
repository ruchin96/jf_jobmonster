<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CExplevel */

$this->title = 'Update Cexplevel: ' . $model->explevel_id;
$this->params['breadcrumbs'][] = ['label' => 'Cexplevels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->explevel_id, 'url' => ['view', 'id' => $model->explevel_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
