<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "teacher_conditions".
 *
 * @property integer $teacher_condition_id
 * @property string $teacher_condition_title
 * @property string $teacher_condition_body
 */
class TeacherConditions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher_conditions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_condition_title', 'teacher_condition_body'], 'required'],
            [['teacher_condition_body'], 'string'],
            [['teacher_condition_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'teacher_condition_id' => 'Teacher Condition ID',
            'teacher_condition_title' => 'Teacher Condition Title',
            'teacher_condition_body' => 'Teacher Condition Body',
        ];
    }
}
