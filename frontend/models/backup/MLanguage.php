<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "m_language".
 *
 * @property integer $language_id
 * @property string $language_name
 *
 * @property SResume[] $sResumes
 */
class MLanguage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_language';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['language_name'], 'required'],
            [['language_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'language_id' => 'Language ID',
            'language_name' => 'Language Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSResumes()
    {
        return $this->hasMany(SResume::className(), ['res_id_language' => 'language_id']);
    }
}
