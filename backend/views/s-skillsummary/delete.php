<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SSkillsummary */

$this->title = $model->skill_id;
$this->params['breadcrumbs'][] = ['label' => 'Sskillsummaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p>Are you sure you want to delete this item?</p>
<?= Html::a('Delete', ['delete', 'id' => $model->skill_id], [
    'class' => 'btn btn-danger',
    'data' => [
        'method' => 'post',
    ],
]) ?>
