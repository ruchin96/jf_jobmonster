<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_explevel".
 *
 * @property integer $explevel_id
 * @property string $explevel_name
 *
 * @property CJobfinder[] $cJobfinders
 * @property SResume[] $sResumes
 */
class CExplevel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_explevel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['explevel_name'], 'required'],
            [['explevel_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'explevel_id' => 'Explevel ID',
            'explevel_name' => 'Explevel Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCJobfinders()
    {
        return $this->hasMany(CJobfinder::className(), ['low_explvl' => 'explevel_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSResumes()
    {
        return $this->hasMany(SResume::className(), ['res_id_joblevel' => 'explevel_id']);
    }
}
