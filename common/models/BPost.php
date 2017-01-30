<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "b_post".
 *
 * @property integer $blog_id
 * @property string $blog_title
 * @property string $blog_content
 * @property string $blog_picture
 * @property string $blog_tags
 * @property integer $blog_id_category
 * @property string $blog_createdat
 *
 * @property BCategory $blogIdCategory
 */
class BPost extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b_post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['blog_title', 'blog_content', 'blog_picture', 'blog_tags', 'blog_id_category'], 'required'],
            [['blog_content'], 'string'],
            [['blog_id_category'], 'integer'],
            [['blog_createdat'], 'safe'],
            [['blog_title', 'blog_picture', 'blog_tags'], 'string', 'max' => 255],
            [['blog_id_category'], 'exist', 'skipOnError' => true, 'targetClass' => BCategory::className(), 'targetAttribute' => ['blog_id_category' => 'category_id']],
            [['blog_picture'], 'file', 'extensions'=> 'gif,jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'blog_id' => 'Blog ID',
            'blog_title' => 'Blog Title',
            'blog_content' => 'Blog Content',
            'blog_picture' => 'Blog Picture',
            'blog_tags' => 'Blog Tags',
            'blog_id_category' => 'Blog Id Category',
            'blog_createdat' => 'Blog Createdat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBlogIdCategory()
    {
        return $this->hasOne(BCategory::className(), ['category_id' => 'blog_id_category']);
    }
}
