<?php

namespace backend\controllers;

use Yii;
use common\models\BTestimonial;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BTestimonialController implements the CRUD actions for BTestimonial model.
 */
class BTestimonialController extends Controller
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
     * Lists all BTestimonial models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => BTestimonial::find()->asArray()->all(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BTestimonial model.
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
     * Creates a new BTestimonial model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BTestimonial();

        if ($model->load(Yii::$app->request->post())) {

            $testimonial_picture = UploadedFile::getInstance($model,'testimonial_picture');

            if ($testimonial_picture){
                $model->testimonial_picture = $testimonial_picture->basename.".".$testimonial_picture->extension;
            }

            if ($model->validate() && $model->save()) {
            $pathUploadPicture = Yii::getAlias('@frontend').'/web/uploads/team/testimonial_picture/'.$model->testimonial_id;

                if (!file_exists($pathUploadPicture)) {
                    mkdir($pathUploadPicture,0777,true);
                }
                
                if (!is_null($testimonial_picture)){
                    $testimonial_picture->saveAs($pathUploadPicture.'/'.$testimonial_picture->basename.".".$testimonial_picture->extension);
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
     * Updates an existing BTestimonial model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $pic_temp = $model->testimonial_picture;
        if ($model->load(Yii::$app->request->post())) {

            $testimonial_picture = UploadedFile::getInstance($model,'testimonial_picture');

            if ($testimonial_picture){
                $model->testimonial_picture = $testimonial_picture->basename.".".$testimonial_picture->extension;
            }else{
                $model->testimonial_picture = $pic_temp;
            }

            if ($model->validate() && $model->save()) {
            $pathUploadPicture = Yii::getAlias('@frontend').'/web/uploads/team/testimonial_picture/'.$model->testimonial_id;

                if (!file_exists($pathUploadPicture)) {
                    mkdir($pathUploadPicture,0777,true);
                }
                
                if (!is_null($testimonial_picture)){
                    $testimonial_picture->saveAs($pathUploadPicture.'/'.$testimonial_picture->basename.".".$testimonial_picture->extension);
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
     * Deletes an existing BTestimonial model.
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
     * Finds the BTestimonial model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BTestimonial the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BTestimonial::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
