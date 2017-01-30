<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CDresscode */

$this->title = $model->dresscode_id;
$this->params['breadcrumbs'][] = ['label' => 'Cdresscodes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'dresscode_id',
            'dresscode_name',
    ],
]) ?>
