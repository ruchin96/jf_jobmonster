<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SWorkexperience */

$this->title = 'Create Sworkexperience';
$this->params['breadcrumbs'][] = ['label' => 'Sworkexperiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $sel_res['res_id'],
]) ?>
