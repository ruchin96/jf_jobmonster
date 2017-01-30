<?php

namespace backend\controllers;

use Yii;
use common\models\BTag;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BTagController implements the CRUD actions for BTag model.
 */
class BTagController extends Controller
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
     * Lists all BTag models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => BTag::find()->asArray()->all(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BTag model.
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
     * Creates a new BTag model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new BTag();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->save()) {
                echo 1;
            }else{
                echo 0;
            }
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
     * Updates an existing BTag model.
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
     * Deletes an existing BTag model.
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
     * Finds the BTag model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return BTag the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = BTag::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
