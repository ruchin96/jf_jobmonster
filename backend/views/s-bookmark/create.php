<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SBookmark */

$this->title = 'Create Sbookmark';
$this->params['breadcrumbs'][] = ['label' => 'Sbookmarks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $sek_seeker['seek_id'],
]) ?>
