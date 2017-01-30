<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BFeature */

$this->title = $model->feature_id;
$this->params['breadcrumbs'][] = ['label' => 'Bfeatures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'feature_id',
            'feature_name',
            'feature_body:ntext',
            'feature_icon',
    ],
]) ?>
