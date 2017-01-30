<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SWorkexperience */

$this->title = 'Create Sworkexperience';
$this->params['breadcrumbs'][] = ['label' => 'Sworkexperiences', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modal-dialog modal-member">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title">Create Work Exp</h4>
		</div>
		<div class="modal-body text-center">
			<?= $this->render('_form', [
		    	'model' => $model,
			]) ?>
		</div>
	</div>
</div>