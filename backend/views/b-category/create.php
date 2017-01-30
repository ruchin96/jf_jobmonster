<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BCategory */

$this->title = 'Create Bcategory';
$this->params['breadcrumbs'][] = ['label' => 'Bcategories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
