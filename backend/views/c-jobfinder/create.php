<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CJobfinder */

$this->title = 'Create Cjobfinder';
$this->params['breadcrumbs'][] = ['label' => 'Cjobfinders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- <div id="content" class="content"> -->
<?= $this->render('_form', [
    'model' => $model,
]) ?>
<!-- </div> -->
