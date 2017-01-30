<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SSkillsummary */

$this->title = 'Update Sskillsummary: ' . $model->skill_id;
$this->params['breadcrumbs'][] = ['label' => 'Sskillsummaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->skill_id, 'url' => ['view', 'id' => $model->skill_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $model->skill_id_res,
]) ?>
