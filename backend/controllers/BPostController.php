<?php

namespace backend\controllers;

use Yii;
use common\models\BPost;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BPostController implements the CRUD actions for BPost model.
 */
class BPostController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all BPost models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => BPost::find()->joinWith(['blogIdCategory'])->asArray()->all(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BPost model.
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
     * Creates a new BPost model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BPost();

        if ($model->load(Yii::$app->request->post())) {

            $blog_picture = UploadedFile::getInstance($model,'blog_picture');

            // var_dump($blog_picture);die();
            if ($blog_picture){
                $model->blog_picture = $blog_picture->basename.".".$blog_picture->extension;
            }

            if ($model->validate() && $model->save()) {
            $pathUploadPicture = Yii::getAlias('@frontend').'/web/uploads/blog/blog_picture/'.$model->blog_id;

                if (!file_exists($pathUploadPicture)) {
                    mkdir($pathUploadPicture,0777,true);
                }
                
                if (!is_null($blog_picture)){
                    $blog_picture->saveAs($pathUploadPicture.'/'.$blog_picture->basename.".".$blog_picture->extension);
                }
                echo 1;
            }else{
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
     * Updates an existing BPost model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $pic_temp = $model->blog_picture;
        if ($model->load(Yii::$app->request->post())) {

            $blog_picture = UploadedFile::getInstance($model,'blog_picture');

            if ($blog_picture){
                $model->blog_picture = $blog_picture->basename.".".$blog_picture->extension;
            }else{
                $model->blog_picture = $pic_temp;
            }

            if ($model->validate() && $model->save()) {
            $pathUploadPicture = Yii::getAlias('@frontend').'/web/uploads/blog/blog_picture/'.$model->blog_id;

                if (!file_exists($pathUploadPicture)) {
                    mkdir($pathUploadPicture,0777,true);
                }
                
                if (!is_null($blog_picture)){
                    $blog_picture->saveAs($pathUploadPicture.'/'.$blog_picture->basename.".".$blog_picture->extension);
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
     * Deletes an existing BPost model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BPost model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BPost the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BPost::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
