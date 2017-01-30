<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use common\models\CCompanytype;
use app\models\User;

/* @var $this yii\web\View */
/* @var $model app\models\CCompany */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="message"></div>
    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'company_id_user')->dropDownList(ArrayHelper::map(User::find()->all(), 'id', 'username')) ?>

    <?= $form->field($model, 'company_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_desc')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'company_logo')->fileInput() ?>

    <?= $form->field($model, 'company_cover')->fileInput() ?>

    <?= $form->field($model, 'company_googleplus')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_linkedin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_twitter')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'company_type')->dropDownList(ArrayHelper::map(CCompanytype::find()->all(), 'companytype_id', 'companytype_name')) ?>

    <?= $form->field($model, 'company_createdat')->textInput(['value'=>$datenow = date('Y-m-d H:i:s')]) ?>

    <!--<?= $form->field($model, 'company_updatedat')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

