<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
/* @var $model common\models\SEducation */
?>
<div class="modal-dialog modal-member">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title">Accept Application</h4>
		</div>
		<div class="modal-body text-center">
			<p>Are you sure you want to <span class="label label-danger">Reject</span> this App?</p>
			<?php $form = ActiveForm::begin(); ?>

			<?= $form->field($model, 'app_status')->hiddenInput(['value'=>'r'])->label(false)?>

			<?= $form->field($model, 'app_note_comp')->textarea(['rows' => 6, 'placeholder'=>'Take a Note Here'])->label(false) ?>

			<div class="form-actions form-group text-center">
				<?= Html::submitButton('Reject', ['class' => 'btn btn-danger']) ?>
		 	</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>
