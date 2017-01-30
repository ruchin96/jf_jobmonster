<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "b_team".
 *
 * @property integer $team_id
 * @property string $team_name
 * @property string $team_position
 * @property string $team_picture
 * @property string $team_quote
 * @property string $team_facebook
 * @property string $team_instagram
 * @property string $team_googleplus
 * @property string $team_twitter
 */
class BTeam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'b_team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['team_name', 'team_position', 'team_picture', 'team_quote', 'team_facebook', 'team_instagram', 'team_googleplus', 'team_twitter'], 'required'],
            [['team_quote'], 'string'],
            [['team_name', 'team_position', 'team_facebook', 'team_instagram', 'team_twitter'], 'string', 'max' => 50],
            [['team_picture'], 'string', 'max' => 255],
            [['team_googleplus'], 'string', 'max' => 75],
            [['team_picture'], 'file', 'extensions'=> 'gif,jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'team_id' => 'Team ID',
            'team_name' => 'Team Name',
            'team_position' => 'Team Position',
            'team_picture' => 'Team Picture',
            'team_quote' => 'Team Quote',
            'team_facebook' => 'Team Facebook',
            'team_instagram' => 'Team Instagram',
            'team_googleplus' => 'Team Googleplus',
            'team_twitter' => 'Team Twitter',
        ];
    }
}
