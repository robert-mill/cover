<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "job_home".
 *
 * @property integer $job_home_id
 * @property string $job_home_title
 * @property string $job_home_body
 */
class JobHome extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job_home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_home_body'], 'string'],
            [['job_home_title'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'job_home_id' => 'Job Home ID',
            'job_home_title' => 'Job Home Title',
            'job_home_body' => 'Job Home Body',
        ];
    }
}
