<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SApplication */

$this->title = $model->app_id;
$this->params['breadcrumbs'][] = ['label' => 'Sapplications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'app_id',
            'app_id_seek',
            'app_id_job',
            'app_createdat',
            'app_status',
            'app_note:ntext',
            'app_note_comp:ntext',
            'appIdRes.res_title',
    ],
]) ?>
