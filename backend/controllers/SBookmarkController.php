<?php

namespace backend\controllers;

use Yii;
use common\models\SSeeker;
use common\models\SBookmark;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * SBookmarkController implements the CRUD actions for SBookmark model.
 */
class SBookmarkController extends Controller
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
     * Lists all SBookmark models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => SBookmark::find()->joinWith(['bookmarkIdJob','bookmarkIdUser'])->where(['bookmark_id_user'=>$id])->asArray()->all(),
        ]);

        $sek_seeker = SSeeker::find()->where(['seek_id'=>$id])->asArray()->one();
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'sek_seeker' => $sek_seeker,
        ]);
    }

    /**
     * Displays a single SBookmark model.
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
     * Creates a new SBookmark model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $model = new SBookmark();
        $sek_seeker = SSeeker::find()->where(['seek_id'=>$id])->asArray()->one();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                echo 1;
            }else{
                echo 0;
            }
            // return $this->redirect(['index','id'=>$model->bookmark_id_user]);
        } elseif (Yii::$app->request->isAjax) {
            return $this->renderPartial('create', [
                'model' => $model,
                'sek_seeker' => $sek_seeker,
            ], false, true);
        } else  {
            return $this->render('create', [
                'model' => $model,
                'sek_seeker' => $sek_seeker,
            ]);
        }
    }

    /**
     * Updates an existing SBookmark model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                echo 1;
            }else{
                echo 0;
            }
            // return $this->redirect(['index','id'=>$model->bookmark_id_user]);
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
     * Deletes an existing SBookmark model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id, $id_seek)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index', 'id'=>$id_seek]);
    }

    /**
     * Finds the SBookmark model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SBookmark the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SBookmark::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
