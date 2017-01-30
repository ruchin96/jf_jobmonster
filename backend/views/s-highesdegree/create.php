<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SHighesdegree */

$this->title = 'Create Shighesdegree';
$this->params['breadcrumbs'][] = ['label' => 'Shighesdegrees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
