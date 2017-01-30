<?php

namespace frontend\controllers;

use Yii;
use common\models\SWorkexperience;
use common\models\SResume;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SWorkexperienceController implements the CRUD actions for SWorkexperience model.
 */
class SWorkexperienceController extends Controller
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
     * Lists all SWorkexperience models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => SWorkexperience::find()->where(['work_id_res'=>$id])->asArray()->all(),
        ]);

        $sresume = SResume::find()->where(['res_id'=>$id])->asArray()->one();

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'sresume' => $sresume,
        ]);
    }

    /**
     * Displays a single SWorkexperience model.
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
     * Creates a new SWorkexperience model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new SWorkexperience();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index','id'=>$model->work_id_res]);
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
     * Updates an existing SWorkexperience model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index','id'=>$model->work_id_res]);
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
     * Deletes an existing SWorkexperience model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id, $id_res)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index','id'=>$id_res]);
    }

    /**
     * Finds the SWorkexperience model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return SWorkexperience the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = SWorkexperience::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
