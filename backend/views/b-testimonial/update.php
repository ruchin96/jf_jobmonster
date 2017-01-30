<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BTestimonial */

$this->title = 'Update Btestimonial: ' . $model->testimonial_id;
$this->params['breadcrumbs'][] = ['label' => 'Btestimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->testimonial_id, 'url' => ['view', 'id' => $model->testimonial_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
