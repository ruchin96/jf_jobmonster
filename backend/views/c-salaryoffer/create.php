<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CSalaryoffer */

$this->title = 'Create Csalaryoffer';
$this->params['breadcrumbs'][] = ['label' => 'Csalaryoffers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
