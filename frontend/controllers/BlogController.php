<?php

namespace frontend\controllers;

use Yii;
use common\models\BCategory;
use common\models\BTag;
use common\models\BPost;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SSkillsummaryController implements the CRUD actions for SSkillsummary model.
 */
class BlogController extends Controller
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
     * Lists all SSkillsummary models.
     * @return mixed
     */
    public function actionIndex()
    {
        $itemPerPage = 4;
        $itemCount = count(BPost::find()->all());

        if (isset($_GET['page']) AND !empty($_GET['page'])) {
            $_GET['page'] = intval($_GET['page']);
            $pageCounter = $_GET['page'];
        }else{
            $pageCounter = 1;
        }
        $offsetPart = ($pageCounter - 1) * $itemPerPage;

        // $pageCounter = $pageCounter;
        $pageTotal = ceil($itemCount/$itemPerPage);

        $contents = BPost::find()
        ->limit($itemPerPage)
        ->offset($offsetPart)
        ->asArray()->all();

        $contentslist = BPost::find()->limit(6)->asArray()->all();
        $categories = BCategory::find()->asArray()->all();
        return $this->render('index',[
                'contents' => $contents,
                'categories' => $categories,
                'pageCounter' => $pageCounter,
                'pageTotal' => $pageTotal,
                'contentslist' => $contentslist,
            ]);
    }

    public function actionDetailBlog($id)
    {
        $contentslist = BPost::find()->limit(6)->asArray()->all();
        $categories = BCategory::find()->asArray()->all();
        $content = BPost::find()->where(['blog_id'=>$id])->joinWith(['blogIdCategory'])->asArray()->one();
        return $this->render('detail',[
                'content' => $content,
                'categories' => $categories,
                'contentslist' => $contentslist,
            ]);
    }    
}