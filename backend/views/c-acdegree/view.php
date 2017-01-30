<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CAcdegree */

$this->title = $model->acdegree_id;
$this->params['breadcrumbs'][] = ['label' => 'Cacdegrees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'acdegree_id',
            'acdegree_name',
    ],
]) ?>
