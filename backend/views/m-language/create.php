<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\MLanguage */

$this->title = 'Create Mlanguage';
$this->params['breadcrumbs'][] = ['label' => 'Mlanguages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>

