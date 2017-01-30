<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SHighesdegree */

$this->title = $model->hdegree_id;
$this->params['breadcrumbs'][] = ['label' => 'Shighesdegrees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'hdegree_id',
            'hdegree_name',
    ],
]) ?>
