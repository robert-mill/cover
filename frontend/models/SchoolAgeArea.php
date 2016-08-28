<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "school_age_area".
 *
 * @property integer $school_age_area
 * @property string $school_age
 */
class SchoolAgeArea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_age_area';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_age'], 'required'],
            [['school_age'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_age_area' => 'School Age Area',
            'school_age' => 'School Age',
        ];
    }
}
