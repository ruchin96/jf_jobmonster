<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CTimecategory */

$this->title = 'Create Ctimecategory';
$this->params['breadcrumbs'][] = ['label' => 'Ctimecategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
