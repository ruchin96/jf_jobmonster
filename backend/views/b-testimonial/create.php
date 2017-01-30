<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BTestimonial */

$this->title = 'Create Btestimonial';
$this->params['breadcrumbs'][] = ['label' => 'Btestimonials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
