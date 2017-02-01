<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\MLocation */

$this->title = 'Create Mlocation';
$this->params['breadcrumbs'][] = ['label' => 'Mlocations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
