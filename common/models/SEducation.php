<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "s_education".
 *
 * @property integer $edu_id
 * @property integer $edu_id_res
 * @property string $edu_sname
 * @property string $edu_qualify
 * @property string $edu_start
 * @property string $edu_end
 * @property string $edu_note
 *
 * @property SResume $eduIdRes
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
            [['edu_id_res', 'edu_sname', 'edu_qualify', 'edu_start', 'edu_end', 'edu_note'], 'required'],
            [['edu_id_res'], 'integer'],
            [['edu_start', 'edu_end'], 'safe'],
            [['edu_note'], 'string'],
            [['edu_sname', 'edu_qualify'], 'string', 'max' => 255],
            [['edu_id_res'], 'exist', 'skipOnError' => true, 'targetClass' => SResume::className(), 'targetAttribute' => ['edu_id_res' => 'res_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'edu_id' => 'Edu ID',
            'edu_id_res' => 'Edu Id Res',
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
    public function getEduIdRes()
    {
        return $this->hasOne(SResume::className(), ['res_id' => 'edu_id_res']);
    }
}
