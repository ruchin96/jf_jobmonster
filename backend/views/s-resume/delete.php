<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SResume */

$this->title = $model->res_id;
$this->params['breadcrumbs'][] = ['label' => 'Sresumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p>Are you sure you want to delete this item?</p>
<?= Html::a('Delete', ['delete', 'id' => $model->res_id, 'id_seek' => $model->res_id_seek], [
    'class' => 'btn btn-danger',
    'data' => [
        'method' => 'post',
    ],
]) ?>
