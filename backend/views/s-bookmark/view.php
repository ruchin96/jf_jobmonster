<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SBookmark */

$this->title = $model->bookmark_id;
$this->params['breadcrumbs'][] = ['label' => 'Sbookmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'bookmark_id',
            'bookmarkIdUser.seek_name',
            'bookmarkIdJob.jobfinder_jobname',
    ],
]) ?>
