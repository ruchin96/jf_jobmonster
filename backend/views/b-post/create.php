<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BPost */

$this->title = 'Create Bpost';
$this->params['breadcrumbs'][] = ['label' => 'Bposts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
