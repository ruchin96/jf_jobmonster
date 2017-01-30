<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MRole */

$this->title = 'Create Mrole';
$this->params['breadcrumbs'][] = ['label' => 'Mroles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
