<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MRole */

$this->title = $model->role_id;
$this->params['breadcrumbs'][] = ['label' => 'Mroles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'role_id',
        'role_name',
    ],
]) ?>
