<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "job_home_images".
 *
 * @property integer $job_home_image_id
 * @property integer $job_home_fk
 * @property string $job_home_image
 */
class JobHomeImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'job_home_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_home_fk', 'job_home_image'], 'required'],
            [['job_home_fk'], 'integer'],
            [['job_home_image'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'job_home_image_id' => 'Job Home Image ID',
            'job_home_fk' => 'Job Home Fk',
            'job_home_image' => 'Job Home Image',
        ];
    }
}
