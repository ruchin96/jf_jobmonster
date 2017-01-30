<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "vapplication".
 *
 * @property integer $app_id
 * @property integer $app_id_seek
 * @property integer $app_id_job
 * @property string $app_createdat
 * @property string $app_status
 * @property string $app_note
 * @property string $seek_name
 * @property integer $seek_id
 * @property string $seek_picture
 * @property string $jobfinder_jobname
 * @property integer $jobfinder_id
 * @property integer $jobfinder_id_company
 * @property integer $company_id
 * @property string $company_name
 * @property string $company_logo
 */
class Vapplication extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vapplication';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['app_id', 'app_id_seek', 'app_id_job', 'seek_id', 'jobfinder_id', 'jobfinder_id_company', 'company_id'], 'integer'],
            [['app_id_seek', 'app_id_job', 'app_createdat', 'app_status', 'app_note', 'jobfinder_jobname', 'jobfinder_id_company'], 'required'],
            [['app_createdat'], 'safe'],
            [['app_status', 'app_note'], 'string'],
            [['seek_name', 'seek_picture', 'jobfinder_jobname', 'company_name', 'company_logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'app_id' => 'App ID',
            'app_id_seek' => 'App Id Seek',
            'app_id_job' => 'App Id Job',
            'app_createdat' => 'App Createdat',
            'app_status' => 'App Status',
            'app_note' => 'App Note',
            'seek_name' => 'Seek Name',
            'seek_id' => 'Seek ID',
            'seek_picture' => 'Seek Picture',
            'jobfinder_jobname' => 'Jobfinder Jobname',
            'jobfinder_id' => 'Jobfinder ID',
            'jobfinder_id_company' => 'Jobfinder Id Company',
            'company_id' => 'Company ID',
            'company_name' => 'Company Name',
            'company_logo' => 'Company Logo',
        ];
    }
}
