<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "b_feature".
 *
 * @property integer $feature_id
 * @property string $feature_name
 * @property string $feature_body
 * @property string $feature_icon
 */
class BFeature extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b_feature';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['feature_name', 'feature_body', 'feature_icon'], 'required'],
            [['feature_body'], 'string'],
            [['feature_name'], 'string', 'max' => 100],
            [['feature_icon'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'feature_id' => 'Feature ID',
            'feature_name' => 'Feature Name',
            'feature_body' => 'Feature Body',
            'feature_icon' => 'Feature Icon',
        ];
    }
}
