<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CYearexperience */

$this->title = $model->yearexp_id;
$this->params['breadcrumbs'][] = ['label' => 'Cyearexperiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'yearexp_id',
            'yearexp_value',
    ],
]) ?>
