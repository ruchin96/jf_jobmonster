<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CJobcategory */

$this->title = 'Create Cjobcategory';
$this->params['breadcrumbs'][] = ['label' => 'Cjobcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
