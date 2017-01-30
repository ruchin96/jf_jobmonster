<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CExplevel */

$this->title = 'Create Cexplevel';
$this->params['breadcrumbs'][] = ['label' => 'Cexplevels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= $this->render('_form', [
    'model' => $model,
]) ?>
