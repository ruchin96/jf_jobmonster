<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SSkillsummary */

$this->title = $model->skill_id;
$this->params['breadcrumbs'][] = ['label' => 'Sskillsummaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
                    'skill_id',
            'skill_id_res',
            'skill_name',
            'skill_prosentase',
    ],
]) ?>
