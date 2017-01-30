<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use common\models\SSeeker;
use common\models\SResume;
use common\models\SApplication;
use common\models\SEducation;
use common\models\SWorkexperience;
use common\models\SSkillsummary;
use common\models\SBookmark;

/**
 * Site controller
 */
class CandidateController extends Controller
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
                                'create-resume',
                                'update-resume', 
                                'modal-delete-resume',
                                'delete-resume',
                                'manage-app',
                                'send-app',
                                'simpanDataApp',
                                'bookmark-job',
                                'modal-delete-bookmark',
                                'delete-bookmark',
                                'job-alert',
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

    //======================================= Resume CRUD ===================================================>
    public function actionIndex()
    {
    	$id_candidate = Yii::$app->user->identity->id;
    	$sel_seeker = SSeeker::find()->where(['seek_id_user'=>$id_candidate])->asArray()->one();
    	$all_resume = SResume::find()->joinWith(['resIdJobcategory'])->where(['res_id_seek'=>$sel_seeker['seek_id']])->asArray()->all();
        return $this->render('candidate_resume_manage',[
                'sel_seeker' => $sel_seeker,
                'all_resume' => $all_resume,
            ]);
    }

	public function actionCreateResume()
    {
        $model = new SResume();
        $id_candidate = Yii::$app->user->identity->id;
        $sel_seeker = SSeeker::find()->where(['seek_id_user'=>$id_candidate])->asArray()->one();

        $model->res_createdat = date('Y-m-d');
        $model->res_id_seek = $sel_seeker['seek_id'];

        // var_dump($model->save());die();
        // var_dump(Yii::$app->request->post());die();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } elseif (Yii::$app->request->isAjax) {
            // return $this->renderPartial('candidate_resume_post', [
            //     'model' => $model,
            //     'sel_seeker' => $sel_seeker,
            // ], false, true);
            return $this->render('candidate_resume_post', [
                'model' => $model,
                'sel_seeker' => $sel_seeker,
            ]);
        } else  {
            return $this->render('candidate_resume_post', [
                'model' => $model,
                'sel_seeker' => $sel_seeker,
            ]);
        }
    }

    /**
     * Updates an existing CAcdegree model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdateResume($id)
    {
        $model = $this->findModelResume($id);
        $id_candidate = Yii::$app->user->identity->id;
        $sel_seeker = SSeeker::find()->where(['seek_id_user'=>$id_candidate])->asArray()->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } elseif (Yii::$app->request->isAjax) {
            // return $this->renderPartial('candidate_resume_update', [
            //     'model' => $model,
            //     'sel_seeker' => $sel_seeker,
            // ], false, true);
            return $this->render('candidate_resume_update', [
                'model' => $model,
                'sel_seeker' => $sel_seeker,
            ]);
        } else  {
            return $this->render('candidate_resume_update', [
                'model' => $model,
                'sel_seeker' => $sel_seeker,
            ]);
        }
    }
	
	public function actionModalDeleteResume($id)
    {
        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('candidate_resume_delete', [
                'model' => $this->findModelResume($id),
            ], false, true);
        } else  {
            return $this->render('candidate_resume_delete', [
                'model' => $this->findModelResume($id),
            ]);
        }
    }

    public function actionDeleteResume($id)
    {
        $this->findModelResume($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModelResume($id)
    {
        if (($model = SResume::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    //===================================== Application CRUD =======================================>
	public function actionManageApp()
    {
        $id_candidate = Yii::$app->user->identity->id;
        $sel_seeker = SSeeker::find()->where(['seek_id_user'=>$id_candidate])->asArray()->one();
        $all_app = SApplication::find()->joinWith(['appIdJob'])->where(['app_id_seek'=>$sel_seeker['seek_id']])->asArray()->all();
        return $this->render('candidate_app_manage', [
                'all_app' => $all_app,
                'sel_seeker' => $sel_seeker,
            ]);
    }

    public function actionSendApp($id_user, $id_job)
    {
        $model = new SApplication();
        $sseeker = SSeeker::find()->where(['seek_id_user'=>$id_user])->asArray()->one();

        $model->app_id_seek = $sseeker['seek_id'];
        $model->app_id_job = $id_job;
        $model->app_createdat = date('Y-m-d');
        $model->app_status = 'p';

        if($model->load(Yii::$app->request->post()) && $model->save()){
            return $this->redirect(['site/jobs-detail', 'id'=> $model->app_id_job]);
        }else{
            return $this->renderPartial('candidate_app_send', [
                'model' => $model,
                'sseeker' => $sseeker
            ]);
        }
    }

    //<======================================= Bookmark CRUD ===========================================>
    public function actionBookmarkJob()
    {
        $id_candidate = Yii::$app->user->identity->id;
        $sel_seeker = SSeeker::find()->where(['seek_id_user'=>$id_candidate])->asArray()->one();

        $all_bookmark = SBookmark::find()->joinWith([
            'bookmarkIdJob', 
            'bookmarkIdJob.jobfinderIdCompany', 
            'bookmarkIdJob.jobfinderTimecategory', 
            'bookmarkIdJob.jobfinderCategory'
        ])
        ->where(['bookmark_id_user'=>$sel_seeker['seek_id']])
        ->asArray()->all();

        return $this->render('candidate_bookmark_job',[
                'all_bookmark' => $all_bookmark,
                'sel_seeker' => $sel_seeker,
            ]);
    }

    public function actionModalDeleteBookmark($id)
    {
        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('candidate_bookmark_delete', [
                'model' => $this->findModelBookmark($id),
            ], false, true);
        } else  {
            return $this->render('candidate_bookmark_delete', [
                'model' => $this->findModelBookmark($id),
            ]);
        }
    }

    public function actionDeleteBookmark($id)
    {
        $this->findModelBookmark($id)->delete();

        return $this->redirect(['bookmark-job']);
    }

    protected function findModelBookmark($id)
    {
        if (($model = SBookmark::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    //=============================== Job Alert CRUD ========================================>
    public function actionJobAlert()
    {
        $id_candidate = Yii::$app->user->identity->id;
        $sel_seeker = SSeeker::find()->where(['seek_id_user'=>$id_candidate])->asArray()->one();
        return $this->render('candidate_job_alert',[
                'sel_seeker' => $sel_seeker,
            ]);
    }


    //=============================== Profile CRUD =========================================>
    public function actionProfile()
    {
        $post = Yii::$app->request->post();
        $id_candidate = Yii::$app->user->identity->id;
        if(count($post)>0){
            $this::simpanDataProfile($post['seek_id']);
        }
        $sel_seeker = SSeeker::find()->where(['seek_id_user'=>$id_candidate])->asArray()->one();
        return $this->render('candidate_profile',[
                'sel_seeker' => $sel_seeker,
            ]);
    }

    private function simpanDataProfile($id){
        $data = Yii::$app->request->post();
        $pathUploadPicture = Yii::getAlias('@frontend').'/web/uploads/seeker/seek_picture/'.$id;

        if(isset($data['seek_id']))
            $Data = SSeeker::findOne($data['seek_id']);

        $Data->seek_name = $data['seek_name'];
        $Data->seek_curr_job = $data['seek_curr_job'];
        $Data->seek_curr_comp = $data['seek_curr_comp'];
        $Data->seek_birthday = $data['seek_birthday'];
        $Data->seek_address = $data['seek_address'];
        $Data->seek_telp = $data['seek_telp'];
        $Data->seek_facebook = $data['seek_facebook'];
        $Data->seek_twitter = $data['seek_twitter'];
        $Data->seek_linkedin = $data['seek_linkedin'];
        $Data->seek_instagram = $data['seek_instagram'];
        $Data->seek_behance = $data['seek_behance'];
        $Data->seek_googleplus = $data['seek_googleplus'];
        $Data->seek_selfdesc = $data['seek_selfdesc'];
        
        $seek_picture = UploadedFile::getInstanceByName('seek_picture');
        
        if ($seek_picture){
            $Data->seek_picture = $seek_picture->basename.".".$seek_picture->extension;
        }

        if ($Data->save()) {
            if (!file_exists($pathUploadPicture)) {
                mkdir($pathUploadPicture,0777,true);
            }
            
            if (!is_null($seek_picture)){
                $seek_picture->saveAs($pathUploadPicture.'/'.$seek_picture->basename.".".$seek_picture->extension);
            }
        }
    }
}
