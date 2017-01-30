<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "c_companytype".
 *
 * @property integer $companytype_id
 * @property string $companytype_name
 *
 * @property CCompany[] $cCompanies
 */
class CCompanytype extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'c_companytype';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['companytype_name'], 'required'],
            [['companytype_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'companytype_id' => 'Companytype ID',
            'companytype_name' => 'Companytype Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCCompanies()
    {
        return $this->hasMany(CCompany::className(), ['company_type' => 'companytype_id']);
    }
}
