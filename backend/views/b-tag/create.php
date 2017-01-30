<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BTag */

$this->title = 'Create Btag';
$this->params['breadcrumbs'][] = ['label' => 'Btags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
