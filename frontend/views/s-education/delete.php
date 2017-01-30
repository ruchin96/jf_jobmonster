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
			<h4 class="modal-title">Delete Education Record</h4>
		</div>
		<div class="modal-body text-center">
			<p>Are you sure you want to delete this item?</p>
			<?= Html::a('Delete', ['delete', 'id' => $model->edu_id, 'id_res'=>$model->edu_id_res], [
			    'class' => 'btn btn-danger',
			    'data' => [
			        'method' => 'post',
			    ],
			]) ?>
		</div>
	</div>
</div>
