<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use common\components\EmailTemplate;
use common\models\LoginForm;
use common\models\CCompany;
use common\models\CJobfinder;
use common\models\CJobcategory;
use common\models\CYearexperience;
use common\models\SSeeker;
use common\models\SResume;
use common\models\SHighesdegree;
use common\models\SEducation;
use common\models\SWorkexperience;
use common\models\SSkillsummary;
use common\models\SBookmark;
use common\models\BFeature;
use common\models\BTestimonial;
use common\models\BTeam;
use common\models\BPost;
use common\models\MLocation;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup', 'company-detail'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $jobcategory = CJobcategory::find()->asArray()->all();
        $joblocation = MLocation::find()->asArray()->all();
        $features = BFeature::find()->limit(6)->orderBy(['feature_id'=>SORT_DESC])->asArray()->all();
        $blogs = BPost::find()->joinWith(['blogIdCategory'])->limit(6)->orderBy(['blog_id'=>SORT_DESC])->asArray()->all();
        $testimonial = BTestimonial::find()->limit(6)->orderBy(['testimonial_id'=>SORT_DESC])->asArray()->all();
        $recentjob = CJobfinder::find()
        ->joinWith([
            'jobfinderTimecategory',
            'jobfinderIdCompany',
            'jobfinderLocation',
        ])
        ->limit(4)->orderBy(['jobfinder_updatedat'=>SORT_DESC])
        ->where(['jobfinder_statuspost'=>'r'])
        ->asArray()->all();

        $post = Yii::$app->request->get();

        if (count($post)>0){
            // var_dump($post);
            $query = CJobfinder::find();

            if ($post['jobfinder_jobname'] != null) {
                $query->andWhere(['LIKE','jobfinder_jobname', $post['jobfinder_jobname']]);
            }
            if ($post['jobfinder_category'] != null) {
                $query->andWhere(['LIKE','jobfinder_category', $post['jobfinder_category']]);
            }
            if ($post['jobfinder_location'] != null) {
                $query->andWhere(['LIKE','jobfinder_location', $post['jobfinder_location']]);
            }
            $resultSearch = $query->asArray()->all();

            return $this->render('list_job_search',[
                    'resultSearch' => $resultSearch,
                ]);
        }else{
            return $this->render('index',[
                    'jobcategory' => $jobcategory,
                    'recentjob' => $recentjob,
                    'features' => $features,
                    'testimonial' => $testimonial,
                    'joblocation' => $joblocation,
                    'blogs' => $blogs,
                ]);
        }
    }

    //company
    public function actionCompanylist()
    {
        $itemPerPage = 7;
        $itemCount = count(CCompany::find()->all());

        if (isset($_GET['page']) AND !empty($_GET['page'])) {
            $_GET['page'] = intval($_GET['page']);
            $pageCounter = $_GET['page'];
        }else{
            $pageCounter = 1;
        }
        $offsetPart = ($pageCounter - 1) * $itemPerPage;

        $data['pageCounter'] = $pageCounter;
        $data['pageTotal'] = ceil($itemCount/$itemPerPage);

        $data['all_company'] = CCompany::find()->asArray()->all();
        return $this->render('list_company',$data);
    }

    public function actionCompanyDetail($id)
    {
        $itemPerPage = 4;
        $itemCount = count(CJobfinder::find()->where(['jobfinder_statuspost'=>'r','jobfinder_id_company'=>$id])->all());

        if (isset($_GET['page']) AND !empty($_GET['page'])) {
            $_GET['page'] = intval($_GET['page']);
            $pageCounter = $_GET['page'];
        }else{
            $pageCounter = 1;
        }
        $offsetPart = ($pageCounter - 1) * $itemPerPage;

        $data['pageCounter'] = $pageCounter;
        $data['pageTotal'] = ceil($itemCount/$itemPerPage);
        $data['countJobs'] = CJobfinder::find()->where(['jobfinder_statuspost'=>'r'])->all();

        $data['sel_company'] = CCompany::find()->where(['company_id'=>$id])->asArray()->one();

        $data['com_jobs'] = CJobfinder::find()
        ->joinWith([
            'jobfinderTimecategory',
            'jobfinderLocation',
        ])->limit($itemPerPage)
        ->offset($offsetPart)
        ->where([
            'jobfinder_statuspost'=>'r',
            'jobfinder_id_company'=>$id,
        ])
        ->asArray()->all();

        return $this->render('detail_company', $data);
    }
    
    //jobs
    public function actionJoblist()
    {
        $itemPerPage = 7;
        $itemCount = count(CJobfinder::find()->where(['jobfinder_statuspost'=>'r'])->all());

        if (isset($_GET['page']) AND !empty($_GET['page'])) {
            $_GET['page'] = intval($_GET['page']);
            $pageCounter = $_GET['page'];
        }else{
            $pageCounter = 1;
        }
        $offsetPart = ($pageCounter - 1) * $itemPerPage;

        $data['pageCounter'] = $pageCounter;
        $data['pageTotal'] = ceil($itemCount/$itemPerPage);

        $data['all_job'] = CJobfinder::find()
        ->joinWith([
            'jobfinderTimecategory',
            'jobfinderIdCompany',
            'jobfinderLocation',
        ])
        ->limit($itemPerPage)
        ->offset($offsetPart)
        ->where(['jobfinder_statuspost'=>'r'])
        ->asArray()->all();
        return $this->render('list_job', $data);
    }

    public function actionJobsDetail($id)
    {
        if(count(Yii::$app->request->post())>0){
            $this::SaveJob();
        }
        $sel_jobs = CJobfinder::find()
        ->joinWith([
            'jobfinderDresscode',
            'jobfinderAcdegree',
            'jobfinderYearexp',
            'jobfinderExplvl',
            'jobfinderSalaryoffer',
            'jobfinderCategory',
            'jobfinderTimecategory',
            'jobfinderIdCompany',
            'jobfinderLocation',
        ])
        ->where(['jobfinder_id'=>$id])
        ->asArray()->one();

        $all_bookmark = SBookmark::find()->asArray()->all();
        return $this->render('detail_job', [
                'sel_jobs' => $sel_jobs,
                'all_bookmark' => $all_bookmark,
            ]);
    }


    private function SaveJob()
    {
        $data = Yii::$app->request->post();
        $id_user = Yii::$app->user->identity->id;
        $id_seek = SSeeker::find()->select(['seek_id'])->where(['seek_id_user' => $id_user])->asArray()->one();

        $Data = new SBookmark();
        $Data->bookmark_id_user = $id_seek['seek_id'];
        $Data->bookmark_id_job = $data['jobfinder_id'];
        $Data->save();
        // var_dump($Data);die();
    }

    //resume
    public function actionResumelist()
    {
        $itemPerPage = 8;
        $itemCount = count(SResume::find()->where(['res_statuspost'=>'r'])->all());

        if (isset($_GET['page']) AND !empty($_GET['page'])) {
            $_GET['page'] = intval($_GET['page']);
            $pageCounter = $_GET['page'];
        }else{
            $pageCounter = 1;
        }
        $offsetPart = ($pageCounter - 1) * $itemPerPage;

        $data['pageCounter'] = $pageCounter;
        $data['pageTotal'] = ceil($itemCount/$itemPerPage);

        $data['all_resume'] = SResume::find()->joinWith(['resIdSeek','resIdJobcategory'])->limit($itemPerPage)->offset($offsetPart)->where(['res_statuspost'=>'r'])->asArray()->all();

        $data['all_yexp'] = CYearexperience::find()->asArray()->all();
        $data['all_jobcategory'] = CJobcategory::find()->asArray()->all();
        $data['all_hdegree'] = SHighesdegree::find()->asArray()->all();
        return $this->render('list_resume', $data);
    }

    public function actionResumeDetail($id)
    {
        $sel_resume = SResume::find()
        ->joinWith([
            'resIdSeek',
            'resIdSeek.seekIdUser',
            'resIdJobcategory',
            'resIdHidegree',
            'resIdYearexp',
            'resIdJobcategory',
            'resIdJoblevel',
            'resIdLanguage'
        ])
        ->where(['res_id'=>$id])
        ->asArray()->one();

        $all_edu = SEducation::find()->where(['edu_id_res'=>$id])->orderBy(['edu_start'=>SORT_ASC])->asArray()->all();
        $all_work = SWorkexperience::find()->where(['work_id_res'=>$id])->orderBy(['work_start'=>SORT_ASC])->asArray()->all();
        $all_skill = SSkillsummary::find()->where(['skill_id_res'=>$id])->asArray()->all();

        return $this->render('detail_resume', [
                'sel_resume' => $sel_resume,
                'all_edu' => $all_edu,
                'all_work' => $all_work,
                'all_skill' => $all_skill,
            ]);
    }

    public function actionResumePrint($id)
    {
        $sel_resume = SResume::find()
        ->joinWith([
            'resIdSeek',
            'resIdSeek.seekIdUser',
            'resIdJobcategory',
            'resIdHidegree',
            'resIdYearexp',
            'resIdJobcategory',
            'resIdJoblevel',
            'resIdLanguage'
        ])
        ->where(['res_id'=>$id])
        ->asArray()->one();

        $all_edu = SEducation::find()->where(['edu_id_res'=>$id])->orderBy(['edu_start'=>SORT_ASC])->asArray()->all();
        $all_work = SWorkexperience::find()->where(['work_id_res'=>$id])->orderBy(['work_start'=>SORT_ASC])->asArray()->all();
        $all_skill = SSkillsummary::find()->where(['skill_id_res'=>$id])->asArray()->all();

        return $this->renderPartial('print_resume', [
                'sel_resume' => $sel_resume,
                'all_edu' => $all_edu,
                'all_work' => $all_work,
                'all_skill' => $all_skill,
            ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } if (Yii::$app->request->isAjax) {
            return $this->renderPartial('login', [
                'model' => $model,
            ], true, false);
        } else {
            return $this->render('onepage-login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        $team = BTeam::find()->asArray()->all();
        return $this->render('about',[
                'team' => $team,
            ]);
    }


    public function actionConfirm($id, $key){
        $user = \common\models\User::find()->where(['id'=>$id,'auth_key'=>$key,'status'=>0])->one();
        if(!empty($user)){
            $user->status=10;
            $user->save();
            Yii::$app->getSession()->setFlash('success','Success!');
        }
        else{
            Yii::$app->getSession()->setFlash('warning','Failed!');
        }
        // return $this->goHome();
        return $this->render('confirm_after', ['name' => $user->username]);
    }
    /**
     * Signs user up.
     *
     * @return mixed
     */

    public function actionGoIndex($name){
        return $this->render('confirm_before', ['name' => $name]);
    }

    public function actionSignup()
    {
        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                
                $url = Yii::$app->urlManager->createAbsoluteUrl(['site/confirm','id'=>$user->id])."&key=".$user->auth_key;
                $name = $_POST['name'];
                $index = Yii::$app->urlManager->createAbsoluteUrl(['site/index']);
                $about = Yii::$app->urlManager->createAbsoluteUrl(['site/about']);
                $facebook = 'http://www.facebook.com/jobmonster.indo';
                $twitter = 'http://www.twitter.com/jobmonster.indo';
                $email = $model->email;
                
                $content = EmailTemplate::content($index, $about, $facebook, $twitter, $url, $name, $email);

                $email = \Yii::$app->mailer->compose()
                ->setTo($user->email)
                ->setFrom([\Yii::$app->params['supportEmail'] => 'Support Job Monster'])
                ->setSubject('Jobmonster Signup Confirmation')
                ->setHtmlBody($content)
                ->send();
                
                if ($model->role == 2 ) {
                    if (Yii::$app->getUser()->login($user)) {
                        $company = new CCompany();
                        $company->company_id_user = Yii::$app->user->identity->id;
                        $company->company_name = $_POST['name'];
                        if ($company->save()) {
                            return $this->redirect(['site/go-index', 'name'=>$name]);
                            // return $this->goHome();
                            // return $this->render('after_signup', ['name' => $name]);
                        }
                    }
                }
                if ($model->role == 3) {
                    if (Yii::$app->getUser()->login($user)) {
                        $candidate = new SSeeker();
                        $candidate->seek_id_user = Yii::$app->user->identity->id;
                        $candidate->seek_name = $_POST['name'];
                        if ($candidate->save()) {
                            return $this->redirect(['site/go-index', 'name'=>$name]);
                            // return $this->goHome();
                            // return $this->render('after_signup', ['name' => $name]);
                        }
                    }
                }
            }
        }

        return $this->renderAjax('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
