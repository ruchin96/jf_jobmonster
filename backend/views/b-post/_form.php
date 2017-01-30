<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\BCategory;

/* @var $this yii\web\View */
/* @var $model common\models\BPost */
/* @var $form yii\widgets\ActiveForm */
$category = ArrayHelper::map(BCategory::find()->all(), 'category_id', 'category_name')
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'blog_title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'blog_content')->textarea(['rows' => 6, 'id' => 'wysihtml5']) ?>

    <?= $form->field($model, 'blog_picture')->fileInput() ?>

    <?= $form->field($model, 'blog_tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'blog_id_category')->dropDownList($category) ?>

    <?= $form->field($model, 'blog_createdat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

