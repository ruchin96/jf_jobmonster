<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SApplication */

$this->title = 'Create Sapplication';
$this->params['breadcrumbs'][] = ['label' => 'Sapplications', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
// var_dump($$sek_seeker);die();
?>
<?= $this->render('_form', [
    'model' => $model,
    'id' => $sek_seeker['seek_id'],
]) ?>
