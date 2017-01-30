<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CExplevel */

$this->title = $model->explevel_id;
$this->params['breadcrumbs'][] = ['label' => 'Cexplevels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'explevel_id',
            'explevel_name',
    ],
]) ?>
