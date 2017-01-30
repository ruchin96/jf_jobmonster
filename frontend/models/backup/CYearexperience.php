<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_yearexperience".
 *
 * @property integer $yearexp_id
 * @property string $yearexp_value
 *
 * @property CJobfinder[] $cJobfinders
 * @property SResume[] $sResumes
 */
class CYearexperience extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_yearexperience';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['yearexp_value'], 'required'],
            [['yearexp_value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'yearexp_id' => 'Yearexp ID',
            'yearexp_value' => 'Yearexp Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCJobfinders()
    {
        return $this->hasMany(CJobfinder::className(), ['low_yearexp' => 'yearexp_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSResumes()
    {
        return $this->hasMany(SResume::className(), ['res_id_yearexp' => 'yearexp_id']);
    }
}
