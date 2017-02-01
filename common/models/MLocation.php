<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "m_location".
 *
 * @property integer $location_id
 * @property string $location_name
 *
 * @property CJobfinder[] $cJobfinders
 */
class MLocation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'm_location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['location_name'], 'required'],
            [['location_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'location_id' => 'Location ID',
            'location_name' => 'Location Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCJobfinders()
    {
        return $this->hasMany(CJobfinder::className(), ['jobfinder_location' => 'location_id']);
    }
}
