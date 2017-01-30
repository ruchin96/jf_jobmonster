<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SSkillsummary */

$this->title = 'Create Sskillsummary';
$this->params['breadcrumbs'][] = ['label' => 'Sskillsummaries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modal-dialog modal-member">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title">Create Skill Record</h4>
		</div>
		<div class="modal-body text-center">
			<?= $this->render('_form', [
			    'model' => $model,
			]) ?>
		</div>
	</div>
</div>
