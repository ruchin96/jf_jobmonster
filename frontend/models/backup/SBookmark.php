<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_bookmark".
 *
 * @property integer $bookmark_id
 * @property integer $bookmark_id_user
 * @property integer $bookmark_id_job
 *
 * @property SSeeker $bookmarkIdUser
 * @property CJobfinder $bookmarkIdJob
 */
class SBookmark extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_bookmark';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bookmark_id_user', 'bookmark_id_job'], 'required'],
            [['bookmark_id_user', 'bookmark_id_job'], 'integer'],
            [['bookmark_id_user'], 'exist', 'skipOnError' => true, 'targetClass' => SSeeker::className(), 'targetAttribute' => ['bookmark_id_user' => 'seek_id']],
            [['bookmark_id_job'], 'exist', 'skipOnError' => true, 'targetClass' => CJobfinder::className(), 'targetAttribute' => ['bookmark_id_job' => 'low_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'bookmark_id' => 'Bookmark ID',
            'bookmark_id_user' => 'Bookmark Id User',
            'bookmark_id_job' => 'Bookmark Id Job',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookmarkIdUser()
    {
        return $this->hasOne(SSeeker::className(), ['seek_id' => 'bookmark_id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBookmarkIdJob()
    {
        return $this->hasOne(CJobfinder::className(), ['low_id' => 'bookmark_id_job']);
    }
}
