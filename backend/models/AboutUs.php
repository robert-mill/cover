<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "about_us".
 *
 * @property integer $aboutus_id
 * @property string $aboutus_title
 * @property string $aboutus_body
 */
class AboutUs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about_us';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aboutus_body'], 'string'],
            [['aboutus_title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aboutus_id' => 'Aboutus ID',
            'aboutus_title' => 'Aboutus Title',
            'aboutus_body' => 'Aboutus Body',
        ];
    }
}
