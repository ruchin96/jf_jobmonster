<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CCompanytype */

$this->title = $model->companytype_id;
$this->params['breadcrumbs'][] = ['label' => 'Ccompanytypes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'companytype_id',
            'companytype_name',
    ],
]) ?>
