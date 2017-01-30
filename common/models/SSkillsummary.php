<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "s_skillsummary".
 *
 * @property integer $skill_id
 * @property integer $skill_id_res
 * @property string $skill_name
 * @property integer $skill_prosentase
 *
 * @property SResume $skillIdRes
 */
class SSkillsummary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_skillsummary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['skill_id_res', 'skill_name', 'skill_prosentase'], 'required'],
            [['skill_id_res', 'skill_prosentase'], 'integer'],
            [['skill_name'], 'string', 'max' => 255],
            [['skill_id_res'], 'exist', 'skipOnError' => true, 'targetClass' => SResume::className(), 'targetAttribute' => ['skill_id_res' => 'res_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'skill_id' => 'Skill ID',
            'skill_id_res' => 'Skill Id Res',
            'skill_name' => 'Skill Name',
            'skill_prosentase' => 'Skill Prosentase',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSkillIdRes()
    {
        return $this->hasOne(SResume::className(), ['res_id' => 'skill_id_res']);
    }
}
