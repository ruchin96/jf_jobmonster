<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "s_resume".
 *
 * @property integer $res_id
 * @property integer $res_id_seek
 * @property string $res_title
 * @property integer $res_id_language
 * @property integer $res_id_hidegree
 * @property integer $res_id_yearexp
 * @property integer $res_id_jobcategory
 * @property integer $res_id_joblevel
 * @property integer $res_joblocation
 * @property string $res_attachment
 * @property string $res_selfdesc
 * @property string $res_statuspost
 * @property string $res_createdat
 * @property string $res_updatedat
 *
 * @property SApplication[] $sApplications
 * @property SEducation[] $sEducations
 * @property SSeeker $resIdSeek
 * @property SHighesdegree $resIdHidegree
 * @property CYearexperience $resIdYearexp
 * @property CJobcategory $resIdJobcategory
 * @property CExplevel $resIdJoblevel
 * @property MLanguage $resIdLanguage
 * @property MLocation $resJoblocation
 * @property SSkillsummary[] $sSkillsummaries
 * @property SWorkexperience[] $sWorkexperiences
 */
class SResume extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_resume';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['res_id_seek', 'res_title', 'res_id_language', 'res_id_hidegree', 'res_id_yearexp', 'res_id_jobcategory', 'res_id_joblevel', 'res_joblocation', 'res_selfdesc', 'res_statuspost', 'res_createdat'], 'required'],
            [['res_id_seek', 'res_id_language', 'res_id_hidegree', 'res_id_yearexp', 'res_id_jobcategory', 'res_id_joblevel', 'res_joblocation'], 'integer'],
            [['res_selfdesc', 'res_statuspost'], 'string'],
            [['res_createdat', 'res_updatedat'], 'safe'],
            [['res_title', 'res_attachment'], 'string', 'max' => 255],
            [['res_id_seek'], 'exist', 'skipOnError' => true, 'targetClass' => SSeeker::className(), 'targetAttribute' => ['res_id_seek' => 'seek_id']],
            [['res_id_hidegree'], 'exist', 'skipOnError' => true, 'targetClass' => SHighesdegree::className(), 'targetAttribute' => ['res_id_hidegree' => 'hdegree_id']],
            [['res_id_yearexp'], 'exist', 'skipOnError' => true, 'targetClass' => CYearexperience::className(), 'targetAttribute' => ['res_id_yearexp' => 'yearexp_id']],
            [['res_id_jobcategory'], 'exist', 'skipOnError' => true, 'targetClass' => CJobcategory::className(), 'targetAttribute' => ['res_id_jobcategory' => 'jobcategory_id']],
            [['res_id_joblevel'], 'exist', 'skipOnError' => true, 'targetClass' => CExplevel::className(), 'targetAttribute' => ['res_id_joblevel' => 'explevel_id']],
            [['res_id_language'], 'exist', 'skipOnError' => true, 'targetClass' => MLanguage::className(), 'targetAttribute' => ['res_id_language' => 'language_id']],
            [['res_joblocation'], 'exist', 'skipOnError' => true, 'targetClass' => MLocation::className(), 'targetAttribute' => ['res_joblocation' => 'location_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'res_id' => 'Res ID',
            'res_id_seek' => 'Res Id Seek',
            'res_title' => 'Res Title',
            'res_id_language' => 'Res Id Language',
            'res_id_hidegree' => 'Res Id Hidegree',
            'res_id_yearexp' => 'Res Id Yearexp',
            'res_id_jobcategory' => 'Res Id Jobcategory',
            'res_id_joblevel' => 'Res Id Joblevel',
            'res_joblocation' => 'Res Joblocation',
            'res_attachment' => 'Res Attachment',
            'res_selfdesc' => 'Res Selfdesc',
            'res_statuspost' => 'Res Statuspost',
            'res_createdat' => 'Res Createdat',
            'res_updatedat' => 'Res Updatedat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSApplications()
    {
        return $this->hasMany(SApplication::className(), ['app_id_res' => 'res_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSEducations()
    {
        return $this->hasMany(SEducation::className(), ['edu_id_res' => 'res_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResIdSeek()
    {
        return $this->hasOne(SSeeker::className(), ['seek_id' => 'res_id_seek']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResIdHidegree()
    {
        return $this->hasOne(SHighesdegree::className(), ['hdegree_id' => 'res_id_hidegree']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResIdYearexp()
    {
        return $this->hasOne(CYearexperience::className(), ['yearexp_id' => 'res_id_yearexp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResIdJobcategory()
    {
        return $this->hasOne(CJobcategory::className(), ['jobcategory_id' => 'res_id_jobcategory']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResIdJoblevel()
    {
        return $this->hasOne(CExplevel::className(), ['explevel_id' => 'res_id_joblevel']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResIdLanguage()
    {
        return $this->hasOne(MLanguage::className(), ['language_id' => 'res_id_language']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResJoblocation()
    {
        return $this->hasOne(MLocation::className(), ['location_id' => 'res_joblocation']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSSkillsummaries()
    {
        return $this->hasMany(SSkillsummary::className(), ['skill_id_res' => 'res_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSWorkexperiences()
    {
        return $this->hasMany(SWorkexperience::className(), ['work_id_res' => 'res_id']);
    }
}
