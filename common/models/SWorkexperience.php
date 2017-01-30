<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "s_workexperience".
 *
 * @property integer $work_id
 * @property integer $work_id_res
 * @property string $work_company
 * @property string $work_jobtitle
 * @property string $work_start
 * @property string $work_end
 * @property string $work_note
 *
 * @property SResume $workIdRes
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
            [['work_id_res', 'work_company', 'work_jobtitle', 'work_start', 'work_end', 'work_note'], 'required'],
            [['work_id_res'], 'integer'],
            [['work_start', 'work_end'], 'safe'],
            [['work_note'], 'string'],
            [['work_company', 'work_jobtitle'], 'string', 'max' => 255],
            [['work_id_res'], 'exist', 'skipOnError' => true, 'targetClass' => SResume::className(), 'targetAttribute' => ['work_id_res' => 'res_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'work_id' => 'Work ID',
            'work_id_res' => 'Work Id Res',
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
    public function getWorkIdRes()
    {
        return $this->hasOne(SResume::className(), ['res_id' => 'work_id_res']);
    }
}
