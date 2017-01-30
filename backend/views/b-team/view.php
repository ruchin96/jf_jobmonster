<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BTeam */

$this->title = $model->team_id;
$this->params['breadcrumbs'][] = ['label' => 'Bteams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'team_id',
            'team_name',
            'team_position',
            // 'team_picture',
            [
            'attribute'=>'team_picture',
            'format'=>'html',
            'value' => $model->team_picture == null ? 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/team/team_picture/default/User.png", ['alt'=>'myImage','width'=>'70','height'=>'50']) 
                    : 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/team/team_picture/".$model->team_id."/".$model->team_picture, ['alt'=>'myImage','width'=>'70','height'=>'50'])
            ],
            'team_quote:ntext',
            'team_facebook',
            'team_instagram',
            'team_googleplus',
            'team_twitter',
    ],
]) ?>
