<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MLanguage */

$this->title = "View ".$model->language_name;
$this->params['breadcrumbs'][] = ['label' => 'Mlanguages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'language_id',
        'language_name',
    ],
]) ?>