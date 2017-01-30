<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_skillsummary".
 *
 * @property integer $skill_id
 * @property integer $skill_id_seek
 * @property string $skill_name
 * @property integer $skill_prosentase
 *
 * @property SSeeker $skillIdSeek
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
            [['skill_id_seek', 'skill_name', 'skill_prosentase'], 'required'],
            [['skill_id_seek', 'skill_prosentase'], 'integer'],
            [['skill_name'], 'string', 'max' => 255],
            [['skill_id_seek'], 'exist', 'skipOnError' => true, 'targetClass' => SSeeker::className(), 'targetAttribute' => ['skill_id_seek' => 'seek_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'skill_id' => 'Skill ID',
            'skill_id_seek' => 'Skill Id Seek',
            'skill_name' => 'Skill Name',
            'skill_prosentase' => 'Skill Prosentase',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSkillIdSeek()
    {
        return $this->hasOne(SSeeker::className(), ['seek_id' => 'skill_id_seek']);
    }
}
