<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\BTeam */

$this->title = 'Update Bteam: ' . $model->team_id;
$this->params['breadcrumbs'][] = ['label' => 'Bteams', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->team_id, 'url' => ['view', 'id' => $model->team_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
