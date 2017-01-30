<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "c_jobcategory".
 *
 * @property integer $jobcategory_id
 * @property string $jobcategory_name
 *
 * @property CJobfinder[] $cJobfinders
 * @property SResume[] $sResumes
 */
class CJobcategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_jobcategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jobcategory_name'], 'required'],
            [['jobcategory_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jobcategory_id' => 'Jobcategory ID',
            'jobcategory_name' => 'Jobcategory Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCJobfinders()
    {
        return $this->hasMany(CJobfinder::className(), ['low_category' => 'jobcategory_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSResumes()
    {
        return $this->hasMany(SResume::className(), ['res_id_jobcategory' => 'jobcategory_id']);
    }
}
