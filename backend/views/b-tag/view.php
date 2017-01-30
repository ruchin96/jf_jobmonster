<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BTag */

$this->title = $model->tag_id;
$this->params['breadcrumbs'][] = ['label' => 'Btags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'tag_id',
            'tag_name',
    ],
]) ?>
