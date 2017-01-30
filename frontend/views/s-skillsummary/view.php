<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\SSkillsummary */

$this->title = $model->skill_id;
$this->params['breadcrumbs'][] = ['label' => 'Sskillsummaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modal-dialog modal-member">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title">View Skill Record</h4>
		</div>
		<div class="modal-body text-center">
			<?= DetailView::widget([
			    'model' => $model,
			    'attributes' => [
			            //         'skill_id',
			            // 'skill_id_res',
			            'skill_name',
			            'skill_prosentase',
			    ],
			]) ?>
		</div>
	</div>
</div>
