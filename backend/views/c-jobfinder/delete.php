<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CJobfinder */

$this->title = $model->jobfinder_id;
$this->params['breadcrumbs'][] = ['label' => 'Cjobfinders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p>Are you sure you want to delete this item?</p>
<?= Html::a('Delete', ['delete', 'id' => $model->jobfinder_id, 'id_company'=>$model->jobfinder_id_company], [
    'class' => 'btn btn-danger',
    'data' => [
        'method' => 'post',
    ],
]) ?>
