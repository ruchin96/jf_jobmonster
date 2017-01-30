<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_dresscode".
 *
 * @property integer $dresscode_id
 * @property string $dresscode_name
 *
 * @property CJobfinder[] $cJobfinders
 */
class CDresscode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_dresscode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dresscode_name'], 'required'],
            [['dresscode_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'dresscode_id' => 'Dresscode ID',
            'dresscode_name' => 'Dresscode Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCJobfinders()
    {
        return $this->hasMany(CJobfinder::className(), ['low_dresscode' => 'dresscode_id']);
    }
}
