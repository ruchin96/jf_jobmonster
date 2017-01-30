<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SWorkexperience */

$this->title = 'Update Sworkexperience: ' . $model->work_id;
$this->params['breadcrumbs'][] = ['label' => 'Sworkexperiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->work_id, 'url' => ['view', 'id' => $model->work_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modal-dialog modal-member">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title">Update Work Exp</h4>
		</div>
		<div class="modal-body text-center">
			<?= $this->render('_form', [
			    'model' => $model,
			]) ?>
		</div>
	</div>
</div>
