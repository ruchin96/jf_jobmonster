<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "c_timecategory".
 *
 * @property integer $timecategory_id
 * @property string $timecategory_name
 *
 * @property CJobfinder[] $cJobfinders
 */
class CTimecategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_timecategory';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['timecategory_name'], 'required'],
            [['timecategory_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'timecategory_id' => 'Timecategory ID',
            'timecategory_name' => 'Timecategory Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCJobfinders()
    {
        return $this->hasMany(CJobfinder::className(), ['low_timecategory' => 'timecategory_id']);
    }
}
