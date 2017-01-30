<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "s_seeker".
 *
 * @property integer $seek_id
 * @property integer $seek_id_user
 * @property string $seek_name
 * @property string $seek_curr_job
 * @property string $seek_curr_comp
 * @property string $seek_birthday
 * @property string $seek_address
 * @property string $seek_telp
 * @property string $seek_facebook
 * @property string $seek_twitter
 * @property string $seek_linkedin
 * @property string $seek_instagram
 * @property string $seek_behance
 * @property string $seek_googleplus
 * @property string $seek_picture
 * @property string $seek_selfdesc
 *
 * @property SApplication[] $sApplications
 * @property SBookmark[] $sBookmarks
 * @property SEducation[] $sEducations
 * @property SResume[] $sResumes
 * @property User $seekIdUser
 * @property SSkillsummary[] $sSkillsummaries
 * @property SWorkexperience[] $sWorkexperiences
 */
class SSeeker extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 's_seeker';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['seek_id_user'], 'required'],
            [['seek_id_user'], 'integer'],
            [['seek_birthday'], 'safe'],
            [['seek_selfdesc'], 'string'],
            [['seek_name', 'seek_curr_job', 'seek_curr_comp', 'seek_address', 'seek_facebook', 'seek_twitter', 'seek_linkedin', 'seek_instagram', 'seek_behance', 'seek_googleplus', 'seek_picture'], 'string', 'max' => 255],
            [['seek_telp'], 'string', 'max' => 20],
            [['seek_id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['seek_id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'seek_id' => 'Seek ID',
            'seek_id_user' => 'Seek Id User',
            'seek_name' => 'Seek Name',
            'seek_curr_job' => 'Seek Curr Job',
            'seek_curr_comp' => 'Seek Curr Comp',
            'seek_birthday' => 'Seek Birthday',
            'seek_address' => 'Seek Address',
            'seek_telp' => 'Seek Telp',
            'seek_facebook' => 'Seek Facebook',
            'seek_twitter' => 'Seek Twitter',
            'seek_linkedin' => 'Seek Linkedin',
            'seek_instagram' => 'Seek Instagram',
            'seek_behance' => 'Seek Behance',
            'seek_googleplus' => 'Seek Googleplus',
            'seek_picture' => 'Seek Picture',
            'seek_selfdesc' => 'Seek Selfdesc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSApplications()
    {
        return $this->hasMany(SApplication::className(), ['app_id_seek' => 'seek_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSBookmarks()
    {
        return $this->hasMany(SBookmark::className(), ['bookmark_id_user' => 'seek_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSEducations()
    {
        return $this->hasMany(SEducation::className(), ['edu_id_seek' => 'seek_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSResumes()
    {
        return $this->hasMany(SResume::className(), ['res_id_seek' => 'seek_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSeekIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'seek_id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSSkillsummaries()
    {
        return $this->hasMany(SSkillsummary::className(), ['skill_id_seek' => 'seek_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSWorkexperiences()
    {
        return $this->hasMany(SWorkexperience::className(), ['work_id_seek' => 'seek_id']);
    }
}
