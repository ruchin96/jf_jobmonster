<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MLanguage */

$this->title = $model->language_id;
$this->params['breadcrumbs'][] = ['label' => 'Mlanguages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modal-body">
	<p>Are you sure you want to delete this item?</p>
    <?= Html::a('Delete', ['delete', 'id' => $model->language_id], [
        'class' => 'btn btn-danger',
        'data' => [
            'method' => 'post',
        ],
    ]) ?>

</div>
