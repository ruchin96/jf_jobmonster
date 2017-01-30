<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CCompanytype */

$this->title = $model->companytype_id;
$this->params['breadcrumbs'][] = ['label' => 'Ccompanytypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<p>Are you sure you want to delete this item?</p>
<?= Html::a('Delete', ['delete', 'id' => $model->companytype_id], [
    'class' => 'btn btn-danger',
    'data' => [
        'method' => 'post',
    ],
]) ?>
