<?php
namespace frontend\controllers;

use Yii;
use common\models\CCompany;
use common\models\CCompanytype;
use common\models\CJobfinder;
use common\models\SApplication;
use common\models\Vapplication;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class CompanyController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
		//parent::behaviors();
        return [
        	'access' => [
	            'class' => AccessControl::className(),
	            'only' => ['create', 'update'],
	            'rules' => [
	                [
	                    'allow' => false,
	                    'verbs' => ['POST']
	                ],
	                // allow authenticated users
	                [
	                	'actions' => [
	                		'index',
		                	'manage-app',
                            'modal-accept-app',
                            'modal-reject-app',
                            'update-app',
		                	'manage-job',
                            'create-job',
                            'update-job',
                            'modal-delete-job',
                            'delete-job',
		                	'package',
		                	'simpanDataPlan',
		                	'delete',
		                	'profile',
		                	'simpanDataProfile',
	                	],
	                    'allow' => true,
	                    'roles' => ['@'],
	                ],
	            ],
	        ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
    	$id_user = Yii::$app->user->identity->id;
        $sel_company = CCompany::find()->where(['company_id_user'=>$id_user])->asArray()->one();
        return $this->render('company_plan_manaje',[
                'sel_company' => $sel_company,
            ]);
    }

    //===============================================app Man================================>
	public function actionManageApp()
    {
        $id_user = Yii::$app->user->identity->id;
        $sel_company = CCompany::find()->where(['company_id_user'=>$id_user])->asArray()->one();
        $all_app = Vapplication::find()->where(['company_id'=>$sel_company['company_id'], 'app_status'=>'p'])->asArray()->all();
        return $this->render('company_app_manaje',[
                'sel_company' => $sel_company,
                'all_app' => $all_app,
            ]);
    }

    public function actionModalAcceptApp($id)
    {
        $model = $this->findModelApp($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['manage-app']);
        } elseif (Yii::$app->request->isAjax) {
            return $this->renderPartial('company_app_acc', [
                'model' => $this->findModelApp($id),
            ], false, true);
        } else  {
            return $this->render('company_app_acc', [
                'model' => $this->findModelApp($id),
            ]);
        }
    }

    public function actionModalRejectApp($id)
    {
        $model = $this->findModelApp($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['manage-app']);
        } elseif (Yii::$app->request->isAjax) {
            return $this->renderPartial('company_app_reject', [
                'model' => $this->findModelApp($id),
            ], false, true);
        } else  {
            return $this->render('company_app_reject', [
                'model' => $this->findModelApp($id),
            ]);
        }
    }

    protected function findModelApp($id)
    {
        if (($model = SApplication::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    //============================================package====================================>
    public function actionPackage()
    {
        $id_user = Yii::$app->user->identity->id;
        $sel_company = CCompany::find()->where(['company_id_user'=>$id_user])->asArray()->one();
        return $this->render('company_package',[
                'sel_company' => $sel_company,
            ]);
    }
    //======================= APP MaN ================================>
    public function actionManageJob()
    {
        $id_user = Yii::$app->user->identity->id;
        $sel_company = CCompany::find()->where(['company_id_user'=>$id_user])->asArray()->one();
        $all_job = CJobfinder::find()->where(['jobfinder_id_company'=>$sel_company['company_id']])->asArray()->all();
        return $this->render('company_job_manaje',[
                'sel_company' => $sel_company,
                'all_job' => $all_job,
            ]);
    }

    public function actionCreateJob()
    {
        $model = new CJobfinder();
        $id_user = Yii::$app->user->identity->id;
        $sel_company = CCompany::find()->where(['company_id_user'=>$id_user])->asArray()->one();

        $model->jobfinder_createdat = date('Y-m-d');
        $model->jobfinder_id_company = $sel_company['company_id'];

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['manage-job']);
        } elseif (Yii::$app->request->isAjax) {
            return $this->render('company_job_post', [
                'model' => $model,
                'sel_company' => $sel_company,
            ]);
        } else  {
            return $this->render('company_job_post', [
                'model' => $model,
                'sel_company' => $sel_company,
            ]);
        }
    }

    public function actionUpdateJob($id)
    {
        $model = $this->findModelJob($id);
        $id_user = Yii::$app->user->identity->id;
        $sel_company = CCompany::find()->where(['company_id_user'=>$id_user])->asArray()->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['manage-job']);
        } elseif (Yii::$app->request->isAjax) {
            return $this->render('company_job_update', [
                'model' => $model,
                'sel_company' => $sel_company,
            ]);
        } else  {
            return $this->render('company_job_update', [
                'model' => $model,
                'sel_company' => $sel_company,
            ]);
        }
    }
    
    public function actionModalDeleteJob($id)
    {
        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('company_job_delete', [
                'model' => $this->findModelJob($id),
            ], false, true);
        } else  {
            return $this->render('company_job_delete', [
                'model' => $this->findModelJob($id),
            ]);
        }
    }

    public function actionDeleteJob($id)
    {
        $this->findModelJob($id)->delete();

        return $this->redirect(['manage-job']);
    }

    protected function findModelJob($id)
    {
        if (($model = CJobfinder::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    //======================= APP MaN ================================>
    public function actionProfile()
    {
    	$post = Yii::$app->request->post();
        $id_user = Yii::$app->user->identity->id;
        $companytype = CCompanytype::find()->asArray()->all();
        if(count($post)>0){
            $this::simpanDataProfile($post['company_id']);
        }
        $sel_company = CCompany::find()->where(['company_id_user'=>$id_user])->asArray()->one();
        return $this->render('company_profile', [
        		'sel_company' => $sel_company,
                'companytype' => $companytype,
        	]);
    }

    private function simpanDataProfile($id){
        $data = Yii::$app->request->post();
     
        $pathUploadLogo = Yii::getAlias('@frontend').'/web/uploads/company/company_logo/'.$id;
        $pathUploadCover = Yii::getAlias('@frontend').'/web/uploads/company/company_cover/'.$id;

        if(isset($data['company_id']))
            $Data = CCompany::findOne($data['company_id']);

        $Data->company_name = $data['company_name'];
        $Data->company_website = $data['company_website'];
        $Data->company_desc = $data['company_desc'];        
        $Data->company_googleplus = $data['company_googleplus'];
        $Data->company_facebook = $data['company_facebook'];
        $Data->company_linkedin = $data['company_linkedin'];
        $Data->company_twitter = $data['company_twitter'];
        $Data->company_type = $data['company_type'];
        $Data->company_createdat = date('Y-m-d');
        
        $company_logo = UploadedFile::getInstanceByName('company_logo');
        $company_cover = UploadedFile::getInstanceByName('company_cover');

         if ($company_logo){
            $Data->company_logo = $company_logo->basename.".".$company_logo->extension;
        }

        if ($company_cover) {
            $Data->company_cover = $company_cover->basename.".".$company_cover->extension;
        }

        if($Data->save()){
            if (!file_exists($pathUploadLogo)) {
                mkdir($pathUploadLogo,0777,true);
            }
            
            if (!is_null($company_logo)){
                $company_logo->saveAs($pathUploadLogo.'/'.$company_logo->basename.".".$company_logo->extension);
            }

            if (!file_exists($pathUploadCover)) {
                mkdir($pathUploadCover,0777,true);
            }

            if (!is_null($company_cover)){
                $company_cover->saveAs($pathUploadCover.'/'.$company_cover->basename.".".$company_cover->extension);
            }
        }
    }
}
