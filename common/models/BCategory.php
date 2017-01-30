<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "b_category".
 *
 * @property integer $category_id
 * @property string $category_name
 *
 * @property BPost[] $bPosts
 */
class BCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_name'], 'required'],
            [['category_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'category_name' => 'Category Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBPosts()
    {
        return $this->hasMany(BPost::className(), ['blog_id_category' => 'category_id']);
    }
}
