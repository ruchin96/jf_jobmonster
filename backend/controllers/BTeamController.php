<?php

namespace backend\controllers;

use Yii;
use common\models\BTeam;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BTeamController implements the CRUD actions for BTeam model.
 */
class BTeamController extends Controller
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
     * Lists all BTeam models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => BTeam::find()->asArray()->all(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BTeam model.
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
     * Creates a new BTeam model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BTeam();

        if ($model->load(Yii::$app->request->post())) {

            $team_picture = UploadedFile::getInstance($model,'team_picture');

            // var_dump($team_picture);die();
            if ($team_picture){
                $model->team_picture = $team_picture->basename.".".$team_picture->extension;
            }

            if ($model->validate() && $model->save()) {
            $pathUploadPicture = Yii::getAlias('@frontend').'/web/uploads/team/team_picture/'.$model->team_id;

                if (!file_exists($pathUploadPicture)) {
                    mkdir($pathUploadPicture,0777,true);
                }
                
                if (!is_null($team_picture)){
                    $team_picture->saveAs($pathUploadPicture.'/'.$team_picture->basename.".".$team_picture->extension);
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
     * Updates an existing BTeam model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $pic_temp = $model->team_picture;
        if ($model->load(Yii::$app->request->post())) {
            $team_picture = UploadedFile::getInstance($model,'team_picture');

            if ($team_picture){
                $model->team_picture = $team_picture->basename.".".$team_picture->extension;
            }else{
                $model->team_picture = $pic_temp;
            }
            // var_dump($model->save());die();
            if ($model->validate() && $model->save()) {
            $pathUploadPicture = Yii::getAlias('@frontend').'/web/uploads/team/team_picture/'.$model->team_id;

                if (!file_exists($pathUploadPicture)) {
                    mkdir($pathUploadPicture,0777,true);
                }
                
                if (!is_null($team_picture)){
                    $team_picture->saveAs($pathUploadPicture.'/'.$team_picture->basename.".".$team_picture->extension);
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
     * Deletes an existing BTeam model.
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
     * Finds the BTeam model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BTeam the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BTeam::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
