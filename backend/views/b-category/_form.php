<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
// use yii\web\View;

/* @var $this yii\web\View */
/* @var $model common\models\BCategory */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
<?php Pjax::begin(); ?>
    <?php $form = ActiveForm::begin(['id'=>'ajax']); ?>

    <?= $form->field($model, 'category_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
<?php Pjax::end(); ?>