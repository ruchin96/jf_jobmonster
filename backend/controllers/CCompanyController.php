<?php

namespace backend\controllers;

use Yii;
use common\models\CCompany;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use common\component\DeleteDirectory;

/**
 * CCompanyController implements the CRUD actions for CCompany model.
 */
class CCompanyController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                        'roles' => ['@','?'],
                    ],
                    [
                        'actions' => ['logout', 'index', 'create', 'update', 'modal-delete', 'delete', 'view'],
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
     * Lists all CCompany models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => CCompany::find()->joinWith(['companyType'])->asArray()->all(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CCompany model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        if (Yii::$app->request->isAjax){
            return $this->renderPartial('view', [
                'model' => $this->findModel($id),
            ], false, true);
        } else  {
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);
        }
    }

    /**
     * Creates a new CCompany model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CCompany();

        if ($model->load(Yii::$app->request->post())) {
            // var_dump($model->company_id);die();

            $company_logo = UploadedFile::getInstance($model,'company_logo');
            $company_cover = UploadedFile::getInstance($model,'company_cover');

            if ($company_logo){
                $model->company_logo = $company_logo->basename.".".$company_logo->extension;
            }

            if ($company_cover) {
                $model->company_cover = $company_cover->basename.".".$company_cover->extension;
            }

            if ($model->validate() && $model->save()) {
                $pathUploadLogo = Yii::getAlias('@frontend').'/web/uploads/company/company_logo/'.$model->company_id;
                $pathUploadCover = Yii::getAlias('@frontend').'/web/uploads/company/company_cover/'.$model->company_id;

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

                echo 1;
            }else{
                echo 0;
            }
            // return $this->redirect(['index']);
        } elseif (Yii::$app->request->isAjax) {
            return $this->renderPartial('create', [
                'model' => $model,
            ]);
        } else  {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CCompany model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $pathUploadLogo = Yii::getAlias('@frontend').'/web/uploads/company/company_logo/'.$id;
            $pathUploadCover = Yii::getAlias('@frontend').'/web/uploads/company/company_cover/'.$id;

            $company_logo = UploadedFile::getInstance($model,'company_logo');
            $company_cover = UploadedFile::getInstance($model,'company_cover');

            if ($company_logo){
                $model->company_logo = $company_logo->basename.".".$company_logo->extension;
            }

            if ($company_cover) {
                $model->company_cover = $company_cover->basename.".".$company_cover->extension;
            }

            if ($model->validate() && $model->save()) {

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

                echo 1;
            } else {
                echo 0;
            }
            // return $this->redirect(['index']);
        } elseif (Yii::$app->request->isAjax) {
            return $this->renderPartial('update', [
                'model' => $model,
            ]);
        } else  {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    public function actionModalDelete($id)
    {
        if (Yii::$app->request->isAjax) {
            return $this->renderPartial('delete', [
                'model' => $this->findModel($id),
            ]);
        } else  {
            return $this->render('delete', [
                'model' => $this->findModel($id),
            ]);
        }
    }
    /**
     * Deletes an existing CCompany model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */

    public function actionDelete($id)
    {
        $pathUploadLogo = Yii::getAlias('@frontend').'/web/uploads/company/company_logo/'.$id;
        $pathUploadCover = Yii::getAlias('@frontend').'/web/uploads/company/company_cover/'.$id;

        if($this->findModel($id)->delete()){
            DeleteDirectory::deleteDir($pathUploadLogo);
            DeleteDirectory::deleteDir($pathUploadCover);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the CCompany model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CCompany the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CCompany::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
