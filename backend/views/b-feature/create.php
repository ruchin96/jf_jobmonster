<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BFeature */

$this->title = 'Create Bfeature';
$this->params['breadcrumbs'][] = ['label' => 'Bfeatures', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
