<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "s_application".
 *
 * @property integer $app_id
 * @property integer $app_id_seek
 * @property integer $app_id_job
 * @property string $app_createdat
 * @property string $app_status
 * @property string $app_note
 * @property string $app_note_comp
 * @property integer $app_id_res
 *
 * @property SSeeker $appIdSeek
 * @property CJobfinder $appIdJob
 * @property SResume $appIdRes
 */
class SApplication extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_application';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['app_id_seek', 'app_id_job', 'app_createdat', 'app_status', 'app_note', 'app_id_res'], 'required'],
            [['app_id_seek', 'app_id_job', 'app_id_res'], 'integer'],
            [['app_createdat'], 'safe'],
            [['app_status', 'app_note', 'app_note_comp'], 'string'],
            [['app_id_seek'], 'exist', 'skipOnError' => true, 'targetClass' => SSeeker::className(), 'targetAttribute' => ['app_id_seek' => 'seek_id']],
            [['app_id_job'], 'exist', 'skipOnError' => true, 'targetClass' => CJobfinder::className(), 'targetAttribute' => ['app_id_job' => 'jobfinder_id']],
            [['app_id_res'], 'exist', 'skipOnError' => true, 'targetClass' => SResume::className(), 'targetAttribute' => ['app_id_res' => 'res_id']],
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
            'app_note_comp' => 'App Note Comp',
            'app_id_res' => 'App Id Res',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppIdSeek()
    {
        return $this->hasOne(SSeeker::className(), ['seek_id' => 'app_id_seek']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppIdJob()
    {
        return $this->hasOne(CJobfinder::className(), ['jobfinder_id' => 'app_id_job']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAppIdRes()
    {
        return $this->hasOne(SResume::className(), ['res_id' => 'app_id_res']);
    }
}
