<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_highesdegree".
 *
 * @property integer $hdegree_id
 * @property string $hdegree_name
 *
 * @property SResume[] $sResumes
 */
class SHighesdegree extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_highesdegree';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hdegree_name'], 'required'],
            [['hdegree_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hdegree_id' => 'Hdegree ID',
            'hdegree_name' => 'Hdegree Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSResumes()
    {
        return $this->hasMany(SResume::className(), ['res_id_hidegree' => 'hdegree_id']);
    }
}
