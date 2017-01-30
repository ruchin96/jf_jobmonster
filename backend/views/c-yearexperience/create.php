<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CYearexperience */

$this->title = 'Create Cyearexperience';
$this->params['breadcrumbs'][] = ['label' => 'Cyearexperiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$modalHeader = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
