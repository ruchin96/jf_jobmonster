<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_education".
 *
 * @property integer $edu_id
 * @property integer $edu_id_seek
 * @property string $edu_sname
 * @property string $edu_qualify
 * @property string $edu_start
 * @property string $edu_end
 * @property string $edu_note
 *
 * @property SSeeker $eduIdSeek
 */
class SEducation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_education';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['edu_id_seek', 'edu_sname', 'edu_qualify', 'edu_start', 'edu_end', 'edu_note'], 'required'],
            [['edu_id_seek'], 'integer'],
            [['edu_start', 'edu_end'], 'safe'],
            [['edu_note'], 'string'],
            [['edu_sname', 'edu_qualify'], 'string', 'max' => 255],
            [['edu_id_seek'], 'exist', 'skipOnError' => true, 'targetClass' => SSeeker::className(), 'targetAttribute' => ['edu_id_seek' => 'seek_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'edu_id' => 'Edu ID',
            'edu_id_seek' => 'Edu Id Seek',
            'edu_sname' => 'Edu Sname',
            'edu_qualify' => 'Edu Qualify',
            'edu_start' => 'Edu Start',
            'edu_end' => 'Edu End',
            'edu_note' => 'Edu Note',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEduIdSeek()
    {
        return $this->hasOne(SSeeker::className(), ['seek_id' => 'edu_id_seek']);
    }
}
