<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_workexperience".
 *
 * @property integer $work_id
 * @property integer $work_id_seek
 * @property string $work_company
 * @property string $work_jobtitle
 * @property string $work_start
 * @property string $work_end
 * @property string $work_note
 *
 * @property SSeeker $workIdSeek
 */
class SWorkexperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_workexperience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['work_id_seek', 'work_company', 'work_jobtitle', 'work_start', 'work_end', 'work_note'], 'required'],
            [['work_id_seek'], 'integer'],
            [['work_start', 'work_end'], 'safe'],
            [['work_note'], 'string'],
            [['work_company', 'work_jobtitle'], 'string', 'max' => 255],
            [['work_id_seek'], 'exist', 'skipOnError' => true, 'targetClass' => SSeeker::className(), 'targetAttribute' => ['work_id_seek' => 'seek_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'work_id' => 'Work ID',
            'work_id_seek' => 'Work Id Seek',
            'work_company' => 'Work Company',
            'work_jobtitle' => 'Work Jobtitle',
            'work_start' => 'Work Start',
            'work_end' => 'Work End',
            'work_note' => 'Work Note',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkIdSeek()
    {
        return $this->hasOne(SSeeker::className(), ['seek_id' => 'work_id_seek']);
    }
}
