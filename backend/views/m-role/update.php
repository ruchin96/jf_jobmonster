<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MRole */

$this->title = 'Update Mrole: ' . $model->role_id;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>

