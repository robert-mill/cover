<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "school_conditions".
 *
 * @property integer $school_condition_id
 * @property string $school_condition_title
 * @property string $school_condition_text
 */
class SchoolConditions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_conditions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_condition_title', 'school_condition_text'], 'required'],
            [['school_condition_text'], 'string'],
            [['school_condition_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_condition_id' => 'School Condition ID',
            'school_condition_title' => 'School Condition Title',
            'school_condition_text' => 'School Condition Text',
        ];
    }
}
