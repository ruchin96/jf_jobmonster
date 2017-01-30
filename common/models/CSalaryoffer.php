<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "c_salaryoffer".
 *
 * @property integer $salaryoffer_id
 * @property string $salaryoffer_value
 *
 * @property CJobfinder[] $cJobfinders
 */
class CSalaryoffer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_salaryoffer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['salaryoffer_value'], 'required'],
            [['salaryoffer_value'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'salaryoffer_id' => 'Salaryoffer ID',
            'salaryoffer_value' => 'Salaryoffer Value',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCJobfinders()
    {
        return $this->hasMany(CJobfinder::className(), ['low_salaryoffer' => 'salaryoffer_id']);
    }
}
