<?php

namespace backend\controllers;

use Yii;
use common\models\SSeeker;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\components\DeleteDirectory;

/**
 * SSeekerController implements the CRUD actions for SSeeker model.
 */
class SSeekerController extends Controller
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
     * Lists all SSeeker models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => SSeeker::find()->asArray()->all(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SSeeker model.
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
     * Creates a new SSeeker model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SSeeker();

        if ($model->load(Yii::$app->request->post())) {

            $seek_picture = UploadedFile::getInstance($model,'seek_picture');

            if ($seek_picture){
                $model->seek_picture = $seek_picture->basename.".".$seek_picture->extension;
            }

            if ($model->validate() && $model->save()) {
            $pathUploadPicture = Yii::getAlias('@frontend').'/web/uploads/seeker/seek_picture/'.$model->seek_id;

                if (!file_exists($pathUploadPicture)) {
                    mkdir($pathUploadPicture,0777,true);
                }
                
                if (!is_null($seek_picture)){
                    $seek_picture->saveAs($pathUploadPicture.'/'.$seek_picture->basename.".".$seek_picture->extension);
                }
                echo 1;
            } else {
                echo 0;
            }
            // return $this->redirect(['index']);
        } elseif (Yii::$app->request->isAjax) {
            return $this->renderPartial('create', [
                'model' => $model,
            ], false, true);
        } else  {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing SSeeker model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $pic_temp = $model->seek_picture;
        if ($model->load(Yii::$app->request->post())) {

            $seek_picture = UploadedFile::getInstance($model,'seek_picture');

            if ($seek_picture){
                $model->seek_picture = $seek_picture->basename.".".$seek_picture->extension;
            }else{
                $model->seek_picture = $pic_temp;
            }

            if ($model->validate() && $model->save()) {
                $pathUploadPicture = Yii::getAlias('@frontend').'/web/uploads/seeker/seek_picture/'.$id;

                if (!file_exists($pathUploadPicture)) {
                    mkdir($pathUploadPicture,0777,true);
                }
                
                if (!is_null($seek_picture)){
                    $seek_picture->saveAs($pathUploadPicture.'/'.$seek_picture->basename.".".$seek_picture->extension);
                }

                echo 1;
            } else {
                echo 0;
            }
            // return $this->redirect(['index']);
        } elseif (Yii::$app->request->isAjax) {
            return $this->renderPartial('update', [
                'model' => $model,
            ], false, true);
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
            ], false, true);
        } else  {
            return $this->render('delete', [
                'model' => $this->findModel($id),
            ]);
        }
    }
    /**
     * Deletes an existing SSeeker model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $pathUploadPicture = Yii::getAlias('@frontend').'/web/uploads/seeker/seek_picture/'.$id;

        if($this->findModel($id)->delete()){
            DeleteDirectory::deleteDir($pathUploadPicture);
        }

        return $this->redirect(['index']);
    }

    /**
     * Finds the SSeeker model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SSeeker the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SSeeker::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
