<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SEducation */

$this->title = $model->edu_id;
$this->params['breadcrumbs'][] = ['label' => 'Seducations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modal-dialog modal-member">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">View Education Record</h4>
        </div>
        <div class="modal-body text-center">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                                // 'edu_id',
                        // 'edu_id_res',
                        'edu_sname',
                        'edu_qualify',
                        'edu_start',
                        'edu_end',
                        'edu_note:ntext',
                ],
            ]) ?>
        </div>
    </div>
</div>