<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BPost */

$this->title = $model->blog_id;
$this->params['breadcrumbs'][] = ['label' => 'Bposts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'blog_id',
            'blog_title',
            'blog_content:ntext',
            // 'blog_picture',
            [
            'attribute'=>'blog_picture',
            'format'=>'html',
            'value' => $model->blog_picture == null ? 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/blog/blog_picture/default/User.png", ['alt'=>'myImage','width'=>'70','height'=>'50']) 
                    : 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/blog/blog_picture/".$model->blog_id."/".$model->blog_picture, ['alt'=>'myImage','width'=>'70','height'=>'50'])
            ],
            'blog_tags',
            'blogIdCategory.category_name',
            'blog_createdat',
    ],
]) ?>
