<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SResume */

$this->title = 'Create Sresume';
$this->params['breadcrumbs'][] = ['label' => 'Sresumes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $sek_seeker['seek_id'],
]) ?>
