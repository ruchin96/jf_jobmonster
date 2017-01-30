<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CCompanytype */

$this->title = 'Create Ccompanytype';
$this->params['breadcrumbs'][] = ['label' => 'Ccompanytypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
