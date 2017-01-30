<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CSalaryoffer */

$this->title = $model->salaryoffer_id;
$this->params['breadcrumbs'][] = ['label' => 'Csalaryoffers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'salaryoffer_id',
            'salaryoffer_value',
    ],
]) ?>
