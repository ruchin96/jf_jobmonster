<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CDresscode */

$this->title = 'Create Cdresscode';
$this->params['breadcrumbs'][] = ['label' => 'Cdresscodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
