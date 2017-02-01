<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\MLocation */

$this->title = $model->location_id;
$this->params['breadcrumbs'][] = ['label' => 'Mlocations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'location_id',
            'location_name',
    ],
]) ?>
