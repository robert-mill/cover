<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teacher_post_reg".
 *
 * @property integer $teacher_post_reg_id
 * @property string $type_of_position
 * @property string $nationality
 * @property string $prefered_school_type
 * @property string $Current_residence
 * @property string $University_attended
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property integer $start_from
 * @property string $cv
 */
class TeacherPostReg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teacher_post_reg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_of_position', 'nationality', 'prefered_school_type', 'Current_residence', 'University_attended', 'first_name', 'last_name', 'email', 'phone', 'start_from', 'cv'], 'required'],
            [['start_from'], 'integer'],
            [['type_of_position', 'nationality', 'Current_residence', 'University_attended'], 'string', 'max' => 150],
            [['prefered_school_type'], 'string', 'max' => 100],
            [['first_name', 'last_name', 'cv'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 250],
            [['phone'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'teacher_post_reg_id' => 'Teacher Post Reg ID',
            'type_of_position' => 'Type Of Position',
            'nationality' => 'Nationality',
            'prefered_school_type' => 'Prefered School Type',
            'Current_residence' => 'Current Residence',
            'University_attended' => 'University Attended',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'start_from' => 'Start From',
            'cv' => 'Cv',
        ];
    }
}
