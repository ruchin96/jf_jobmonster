<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CAcdegree */

$this->title = 'Create Cacdegree';
$this->params['breadcrumbs'][] = ['label' => 'Cacdegrees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
