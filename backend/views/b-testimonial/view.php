<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\BTestimonial */

$this->title = $model->testimonial_id;
$this->params['breadcrumbs'][] = ['label' => 'Btestimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'testimonial_id',
            'testimonial_name',
            // 'testimonial_picture',
            [
            'attribute'=>'testimonial_picture',
            'format'=>'html',
            'value' => $model->testimonial_picture == null ? 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/team/testimonial_picture/default/User.png", ['alt'=>'myImage','width'=>'70','height'=>'50']) 
                    : 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/team/testimonial_picture/".$model->testimonial_id."/".$model->testimonial_picture, ['alt'=>'myImage','width'=>'70','height'=>'50'])
            ],
            'testimonial_company',
            'testimonial_jobtitle',
            'testimonial_body:ntext',
    ],
]) ?>
