<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_jobfinder".
 *
 * @property integer $low_id
 * @property string $low_jobname
 * @property string $low_jobdesc
 * @property string $low_cover
 * @property string $low_benefit
 * @property string $low_jobreq
 * @property string $low_howtoapply
 * @property integer $low_salaryoffer
 * @property integer $low_explvl
 * @property integer $low_yearexp
 * @property integer $low_acdegree
 * @property integer $low_dresscode
 * @property integer $low_workinghours
 * @property string $low_createdat
 * @property string $low_updatedat
 * @property integer $low_id_company
 * @property integer $low_timecategory
 * @property string $low_location
 * @property integer $low_category
 * @property string $low_closedate
 *
 * @property CSalaryoffer $lowSalaryoffer
 * @property CExplevel $lowExplvl
 * @property CYearexperience $lowYearexp
 * @property CAcdegree $lowAcdegree
 * @property CDresscode $lowDresscode
 * @property CCompany $lowIdCompany
 * @property CTimecategory $lowTimecategory
 * @property CJobcategory $lowCategory
 * @property SApplication[] $sApplications
 * @property SBookmark[] $sBookmarks
 */
class CJobfinder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_jobfinder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['low_jobname', 'low_jobdesc', 'low_cover', 'low_benefit', 'low_jobreq', 'low_howtoapply', 'low_salaryoffer', 'low_explvl', 'low_yearexp', 'low_acdegree', 'low_dresscode', 'low_workinghours', 'low_createdat', 'low_id_company', 'low_timecategory', 'low_location', 'low_category', 'low_closedate'], 'required'],
            [['low_jobdesc', 'low_benefit', 'low_jobreq', 'low_howtoapply'], 'string'],
            [['low_salaryoffer', 'low_explvl', 'low_yearexp', 'low_acdegree', 'low_dresscode', 'low_workinghours', 'low_id_company', 'low_timecategory', 'low_category'], 'integer'],
            [['low_createdat', 'low_updatedat', 'low_closedate'], 'safe'],
            [['low_jobname', 'low_cover', 'low_location'], 'string', 'max' => 255],
            [['low_salaryoffer'], 'exist', 'skipOnError' => true, 'targetClass' => CSalaryoffer::className(), 'targetAttribute' => ['low_salaryoffer' => 'salaryoffer_id']],
            [['low_explvl'], 'exist', 'skipOnError' => true, 'targetClass' => CExplevel::className(), 'targetAttribute' => ['low_explvl' => 'explevel_id']],
            [['low_yearexp'], 'exist', 'skipOnError' => true, 'targetClass' => CYearexperience::className(), 'targetAttribute' => ['low_yearexp' => 'yearexp_id']],
            [['low_acdegree'], 'exist', 'skipOnError' => true, 'targetClass' => CAcdegree::className(), 'targetAttribute' => ['low_acdegree' => 'acdegree_id']],
            [['low_dresscode'], 'exist', 'skipOnError' => true, 'targetClass' => CDresscode::className(), 'targetAttribute' => ['low_dresscode' => 'dresscode_id']],
            [['low_id_company'], 'exist', 'skipOnError' => true, 'targetClass' => CCompany::className(), 'targetAttribute' => ['low_id_company' => 'com_id']],
            [['low_timecategory'], 'exist', 'skipOnError' => true, 'targetClass' => CTimecategory::className(), 'targetAttribute' => ['low_timecategory' => 'timecategory_id']],
            [['low_category'], 'exist', 'skipOnError' => true, 'targetClass' => CJobcategory::className(), 'targetAttribute' => ['low_category' => 'jobcategory_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'low_id' => 'Low ID',
            'low_jobname' => 'Low Jobname',
            'low_jobdesc' => 'Low Jobdesc',
            'low_cover' => 'Low Cover',
            'low_benefit' => 'Low Benefit',
            'low_jobreq' => 'Low Jobreq',
            'low_howtoapply' => 'Low Howtoapply',
            'low_salaryoffer' => 'Low Salaryoffer',
            'low_explvl' => 'Low Explvl',
            'low_yearexp' => 'Low Yearexp',
            'low_acdegree' => 'Low Acdegree',
            'low_dresscode' => 'Low Dresscode',
            'low_workinghours' => 'Low Workinghours',
            'low_createdat' => 'Low Createdat',
            'low_updatedat' => 'Low Updatedat',
            'low_id_company' => 'Low Id Company',
            'low_timecategory' => 'Low Timecategory',
            'low_location' => 'Low Location',
            'low_category' => 'Low Category',
            'low_closedate' => 'Low Closedate',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLowSalaryoffer()
    {
        return $this->hasOne(CSalaryoffer::className(), ['salaryoffer_id' => 'low_salaryoffer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLowExplvl()
    {
        return $this->hasOne(CExplevel::className(), ['explevel_id' => 'low_explvl']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLowYearexp()
    {
        return $this->hasOne(CYearexperience::className(), ['yearexp_id' => 'low_yearexp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLowAcdegree()
    {
        return $this->hasOne(CAcdegree::className(), ['acdegree_id' => 'low_acdegree']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLowDresscode()
    {
        return $this->hasOne(CDresscode::className(), ['dresscode_id' => 'low_dresscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLowIdCompany()
    {
        return $this->hasOne(CCompany::className(), ['com_id' => 'low_id_company']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLowTimecategory()
    {
        return $this->hasOne(CTimecategory::className(), ['timecategory_id' => 'low_timecategory']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLowCategory()
    {
        return $this->hasOne(CJobcategory::className(), ['jobcategory_id' => 'low_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSApplications()
    {
        return $this->hasMany(SApplication::className(), ['app_id_job' => 'low_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSBookmarks()
    {
        return $this->hasMany(SBookmark::className(), ['bookmark_id_job' => 'low_id']);
    }
}
