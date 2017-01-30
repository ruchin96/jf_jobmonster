<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_company".
 *
 * @property integer $company_id
 * @property integer $company_id_user
 * @property string $company_name
 * @property string $company_website
 * @property string $company_desc
 * @property string $company_logo
 * @property string $company_cover
 * @property string $company_googleplus
 * @property string $company_facebook
 * @property string $company_linkedin
 * @property string $company_twitter
 * @property integer $company_type
 * @property string $company_createdat
 * @property string $company_updatedat
 *
 * @property CCompanytype $companyType
 * @property User $companyIdUser
 * @property CJobfinder[] $cJobfinders
 */
class CCompany extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_company';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['company_id_user'], 'required'],
            [['company_id_user', 'company_type'], 'integer'],
            [['company_desc'], 'string'],
            [['company_createdat', 'company_updatedat'], 'safe'],
            [['company_name', 'company_website', 'company_logo', 'company_cover', 'company_googleplus', 'company_facebook', 'company_linkedin', 'company_twitter'], 'string', 'max' => 255],
            [['company_type'], 'exist', 'skipOnError' => true, 'targetClass' => CCompanytype::className(), 'targetAttribute' => ['company_type' => 'companytype_id']],
            [['company_id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['company_id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'company_id' => 'Company ID',
            'company_id_user' => 'Company Id User',
            'company_name' => 'Company Name',
            'company_website' => 'Company Website',
            'company_desc' => 'Company Desc',
            'company_logo' => 'Company Logo',
            'company_cover' => 'Company Cover',
            'company_googleplus' => 'Company Googleplus',
            'company_facebook' => 'Company Facebook',
            'company_linkedin' => 'Company Linkedin',
            'company_twitter' => 'Company Twitter',
            'company_type' => 'Company Type',
            'company_createdat' => 'Company Createdat',
            'company_updatedat' => 'Company Updatedat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyType()
    {
        return $this->hasOne(CCompanytype::className(), ['companytype_id' => 'company_type']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanyIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'company_id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCJobfinders()
    {
        return $this->hasMany(CJobfinder::className(), ['low_id_company' => 'company_id']);
    }
}
