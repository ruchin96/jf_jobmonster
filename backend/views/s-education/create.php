<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SEducation */

$this->title = 'Create Seducation';
$this->params['breadcrumbs'][] = ['label' => 'Seducations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $sel_res['res_id'],
]) ?>
