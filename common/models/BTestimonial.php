<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "b_testimonial".
 *
 * @property integer $testimonial_id
 * @property string $testimonial_name
 * @property string $testimonial_picture
 * @property string $testimonial_company
 * @property string $testimonial_jobtitle
 * @property string $testimonial_body
 */
class BTestimonial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b_testimonial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['testimonial_name', 'testimonial_picture', 'testimonial_company', 'testimonial_jobtitle', 'testimonial_body'], 'required'],
            [['testimonial_body'], 'string'],
            [['testimonial_name', 'testimonial_company', 'testimonial_jobtitle'], 'string', 'max' => 50],
            [['testimonial_picture'], 'string', 'max' => 255],
            [['testimonial_picture'], 'file', 'extensions'=> 'gif,jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'testimonial_id' => 'Testimonial ID',
            'testimonial_name' => 'Testimonial Name',
            'testimonial_picture' => 'Testimonial Picture',
            'testimonial_company' => 'Testimonial Company',
            'testimonial_jobtitle' => 'Testimonial Jobtitle',
            'testimonial_body' => 'Testimonial Body',
        ];
    }
}
