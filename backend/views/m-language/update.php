<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MLanguage */

$this->title = 'Update ' . $model->language_name;
$this->params['breadcrumbs'][] = ['label' => 'Mlanguages', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->language_name, 'url' => ['view', 'id' => $model->language_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
