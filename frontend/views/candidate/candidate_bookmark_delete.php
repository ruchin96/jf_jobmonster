<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CJobfinder */
?>
<div class="modal-dialog modal-member">
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title">Delete Bookmark</h4>
		</div>
		<div class="modal-body text-center">
			<p>Are you sure you want to delete this item?</p>
			<?= Html::a('Delete', ['delete-bookmark', 'id' => $model->bookmark_id], [
			    'class' => 'btn btn-danger',
			    'data' => [
			        'method' => 'post',
			    ],
			]) ?>
		</div>
	</div>
</div>	
