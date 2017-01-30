<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SSeeker */

$this->title = $model->seek_id;
$this->params['breadcrumbs'][] = ['label' => 'Sseekers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'seek_id',
            'seek_id_user',
            'seek_name',
            'seek_curr_job',
            'seek_curr_comp',
            'seek_birthday',
            'seek_address',
            'seek_telp',
            'seek_facebook',
            'seek_twitter',
            'seek_linkedin',
            'seek_instagram',
            'seek_behance',
            'seek_googleplus',
            // 'seek_picture',
            [
            'attribute'=>'seek_picture',
            'format'=>'html',
            'value' => $model->seek_picture == null ? 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/seeker/seek_picture/default/anonymous.png", ['alt'=>'myImage','width'=>'70','height'=>'50']) 
                    : 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/seeker/seek_picture/".$model->seek_id."/".$model->seek_picture, ['alt'=>'myImage','width'=>'70','height'=>'50'])
            ],
            'seek_selfdesc:ntext',
    ],
]) ?>
