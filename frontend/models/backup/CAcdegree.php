<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_acdegree".
 *
 * @property integer $acdegree_id
 * @property string $acdegree_name
 *
 * @property CJobfinder[] $cJobfinders
 */
class CAcdegree extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_acdegree';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['acdegree_name'], 'required'],
            [['acdegree_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'acdegree_id' => 'Acdegree ID',
            'acdegree_name' => 'Acdegree Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCJobfinders()
    {
        return $this->hasMany(CJobfinder::className(), ['low_acdegree' => 'acdegree_id']);
    }
}
