<?php
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\SResume;
?>
<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">

				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title" id="applyJobModalLabel">Apply Job</h4>
		</div>
		<div class="modal-body">
			<!-- <form class="form-horizontal" enctype="multipart/form-data"> -->
			<?php $form = ActiveForm::begin(['id' => 'request-password-reset-form', 'options' => ['enctype' => 'multipart/form-data' , 'class'=>'form-horizontal']]); ?>
				<div class="form-group">
					<label for="candidate_name" class="control-label">Name</label>
					<input type="text" class="form-control" id="candidate_name" value="<?=$sseeker['seek_name']?>" name="candidate_name" autofocus required placeholder="Name" readonly>
				</div>
				<div class="form-group">
					<label for="candidate_email" class="control-label">Email</label>
					<input type="email" class="form-control" id="candidate_email" value="<?=Yii::$app->user->identity->email?>" name="candidate_email" required placeholder="Email" readonly>
				</div>

				<?= $form->field($model, 'app_id_res')->dropDownList(ArrayHelper::map(SResume::find()->where(['res_id_seek'=>$sseeker['seek_id'], 'res_statuspost'=>'r'])->all(), 'res_id', 'res_title')) ?>

				<?= $form->field($model, 'app_note')->textarea(['rows' => 5, 'class'=>'form-control', 'placeholder'=>'Your cover letter/message sent to the employer'])->label('Message') ?>

				*NB : Resume / CV Will Take Automatically From Actived Resume On Your Dashboard 
				<div class="modal-actions">
					<button type="submit" class="btn btn-primary">Send application</button>
				</div>
			<?php ActiveForm::end(); ?>
		</div>
	</div>
</div>