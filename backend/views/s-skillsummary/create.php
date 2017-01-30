<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SSkillsummary */

$this->title = 'Create Sskillsummary';
$this->params['breadcrumbs'][] = ['label' => 'Sskillsummaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $sel_res['res_id'],
]) ?>
