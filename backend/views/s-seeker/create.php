<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SSeeker */

$this->title = 'Create Sseeker';
$this->params['breadcrumbs'][] = ['label' => 'Sseekers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
