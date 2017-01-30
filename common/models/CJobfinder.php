<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "c_jobfinder".
 *
 * @property integer $jobfinder_id
 * @property string $jobfinder_jobname
 * @property string $jobfinder_jobdesc
 * @property string $jobfinder_cover
 * @property string $jobfinder_benefit
 * @property string $jobfinder_jobreq
 * @property string $jobfinder_howtoapply
 * @property integer $jobfinder_salaryoffer
 * @property integer $jobfinder_explvl
 * @property integer $jobfinder_yearexp
 * @property integer $jobfinder_acdegree
 * @property integer $jobfinder_dresscode
 * @property integer $jobfinder_workinghours
 * @property string $jobfinder_createdat
 * @property string $jobfinder_updatedat
 * @property integer $jobfinder_id_company
 * @property integer $jobfinder_timecategory
 * @property string $jobfinder_location
 * @property integer $jobfinder_category
 * @property string $jobfinder_closedate
 * @property string $jobfinder_statuspost
 *
 * @property CSalaryoffer $jobfinderSalaryoffer
 * @property CExplevel $jobfinderExplvl
 * @property CYearexperience $jobfinderYearexp
 * @property CAcdegree $jobfinderAcdegree
 * @property CDresscode $jobfinderDresscode
 * @property CCompany $jobfinderIdCompany
 * @property CTimecategory $jobfinderTimecategory
 * @property CJobcategory $jobfinderCategory
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
            [['jobfinder_jobname', 'jobfinder_salaryoffer', 'jobfinder_explvl', 'jobfinder_yearexp', 'jobfinder_acdegree', 'jobfinder_dresscode', 'jobfinder_workinghours', 'jobfinder_id_company', 'jobfinder_timecategory', 'jobfinder_category', 'jobfinder_closedate', 'jobfinder_statuspost'], 'required'],
            [['jobfinder_jobdesc', 'jobfinder_benefit', 'jobfinder_jobreq', 'jobfinder_howtoapply', 'jobfinder_statuspost'], 'string'],
            [['jobfinder_salaryoffer', 'jobfinder_explvl', 'jobfinder_yearexp', 'jobfinder_acdegree', 'jobfinder_dresscode', 'jobfinder_workinghours', 'jobfinder_id_company', 'jobfinder_timecategory', 'jobfinder_category'], 'integer'],
            [['jobfinder_createdat', 'jobfinder_updatedat', 'jobfinder_closedate'], 'safe'],
            [['jobfinder_jobname', 'jobfinder_cover', 'jobfinder_location'], 'string', 'max' => 255],
            [['jobfinder_salaryoffer'], 'exist', 'skipOnError' => true, 'targetClass' => CSalaryoffer::className(), 'targetAttribute' => ['jobfinder_salaryoffer' => 'salaryoffer_id']],
            [['jobfinder_explvl'], 'exist', 'skipOnError' => true, 'targetClass' => CExplevel::className(), 'targetAttribute' => ['jobfinder_explvl' => 'explevel_id']],
            [['jobfinder_yearexp'], 'exist', 'skipOnError' => true, 'targetClass' => CYearexperience::className(), 'targetAttribute' => ['jobfinder_yearexp' => 'yearexp_id']],
            [['jobfinder_acdegree'], 'exist', 'skipOnError' => true, 'targetClass' => CAcdegree::className(), 'targetAttribute' => ['jobfinder_acdegree' => 'acdegree_id']],
            [['jobfinder_dresscode'], 'exist', 'skipOnError' => true, 'targetClass' => CDresscode::className(), 'targetAttribute' => ['jobfinder_dresscode' => 'dresscode_id']],
            [['jobfinder_id_company'], 'exist', 'skipOnError' => true, 'targetClass' => CCompany::className(), 'targetAttribute' => ['jobfinder_id_company' => 'company_id']],
            [['jobfinder_timecategory'], 'exist', 'skipOnError' => true, 'targetClass' => CTimecategory::className(), 'targetAttribute' => ['jobfinder_timecategory' => 'timecategory_id']],
            [['jobfinder_category'], 'exist', 'skipOnError' => true, 'targetClass' => CJobcategory::className(), 'targetAttribute' => ['jobfinder_category' => 'jobcategory_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'jobfinder_id' => 'Jobfinder ID',
            'jobfinder_jobname' => 'Jobfinder Jobname',
            'jobfinder_jobdesc' => 'Jobfinder Jobdesc',
            'jobfinder_cover' => 'Jobfinder Cover',
            'jobfinder_benefit' => 'Jobfinder Benefit',
            'jobfinder_jobreq' => 'Jobfinder Jobreq',
            'jobfinder_howtoapply' => 'Jobfinder Howtoapply',
            'jobfinder_salaryoffer' => 'Jobfinder Salaryoffer',
            'jobfinder_explvl' => 'Jobfinder Explvl',
            'jobfinder_yearexp' => 'Jobfinder Yearexp',
            'jobfinder_acdegree' => 'Jobfinder Acdegree',
            'jobfinder_dresscode' => 'Jobfinder Dresscode',
            'jobfinder_workinghours' => 'Jobfinder Workinghours',
            'jobfinder_createdat' => 'Jobfinder Createdat',
            'jobfinder_updatedat' => 'Jobfinder Updatedat',
            'jobfinder_id_company' => 'Jobfinder Id Company',
            'jobfinder_timecategory' => 'Jobfinder Timecategory',
            'jobfinder_location' => 'Jobfinder Location',
            'jobfinder_category' => 'Jobfinder Category',
            'jobfinder_closedate' => 'Jobfinder Closedate',
            'jobfinder_statuspost' => 'Jobfinder Statuspost',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobfinderSalaryoffer()
    {
        return $this->hasOne(CSalaryoffer::className(), ['salaryoffer_id' => 'jobfinder_salaryoffer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobfinderExplvl()
    {
        return $this->hasOne(CExplevel::className(), ['explevel_id' => 'jobfinder_explvl']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobfinderYearexp()
    {
        return $this->hasOne(CYearexperience::className(), ['yearexp_id' => 'jobfinder_yearexp']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobfinderAcdegree()
    {
        return $this->hasOne(CAcdegree::className(), ['acdegree_id' => 'jobfinder_acdegree']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobfinderDresscode()
    {
        return $this->hasOne(CDresscode::className(), ['dresscode_id' => 'jobfinder_dresscode']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobfinderIdCompany()
    {
        return $this->hasOne(CCompany::className(), ['company_id' => 'jobfinder_id_company']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobfinderTimecategory()
    {
        return $this->hasOne(CTimecategory::className(), ['timecategory_id' => 'jobfinder_timecategory']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJobfinderCategory()
    {
        return $this->hasOne(CJobcategory::className(), ['jobcategory_id' => 'jobfinder_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSApplications()
    {
        return $this->hasMany(SApplication::className(), ['app_id_job' => 'jobfinder_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSBookmarks()
    {
        return $this->hasMany(SBookmark::className(), ['bookmark_id_job' => 'jobfinder_id']);
    }
}
