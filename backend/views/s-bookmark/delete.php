<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SBookmark */

$this->title = $model->bookmark_id;
$this->params['breadcrumbs'][] = ['label' => 'Sbookmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p>Are you sure you want to delete this item?</p>
<?= Html::a('Delete', ['delete', 'id' => $model->bookmark_id, 'id_seek' => $model->bookmark_id_user], [
    'class' => 'btn btn-danger',
    'data' => [
        'method' => 'post',
    ],
]) ?>
