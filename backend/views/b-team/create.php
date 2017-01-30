<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\BTeam */

$this->title = 'Create Bteam';
$this->params['breadcrumbs'][] = ['label' => 'Bteams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
