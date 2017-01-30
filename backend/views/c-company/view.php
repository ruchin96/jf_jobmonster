<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CCompany */
// var_dump(Url::to('@frontend/web/'));
$this->title = $model->company_id;
$this->params['breadcrumbs'][] = ['label' => 'Ccompanies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Yii::getAlias('@frontend') => frontend/web/ -->
<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
            'company_id',
            [
            'attribute'=>'companyIdUser.username',
            'label'=>'User Company',
            ],
            'company_name',
            'company_website',
            'company_desc:ntext',
            // 'company_logo',
            [
            'attribute'=>'company_logo',
            'format'=>'html',
            'value' => $model->company_logo == null ? 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/company/company_logo/default/anonymous.png", ['alt'=>'myImage','width'=>'70','height'=>'50']) 
                    : 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/company/company_logo/".$model->company_id."/".$model->company_logo, ['alt'=>'myImage','width'=>'70','height'=>'50'])
            ],
            // 'company_cover',
            [
            'attribute'=>'company_cover',
            'format'=>'html',
            'value' => $model->company_cover == null ? 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/company/company_cover/default/anonymous.png", ['alt'=>'myImage','width'=>'70','height'=>'50']) 
                    : 
                    Html::img(Yii::$app->urlManagerFrontend->baseUrl."/web//uploads/company/company_cover/".$model->company_id."/".$model->company_cover, ['alt'=>'myImage','width'=>'70','height'=>'50'])
            ],
            'company_googleplus',
            'company_facebook',
            'company_linkedin',
            'company_twitter',
            [
            'attribute'=>'companyType.companytype_name',
            'label'=>'Company Type',
            ],
            'company_createdat',
            'company_updatedat',
    ],
]) ?>
