<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "universities".
 *
 * @property integer $university_id
 * @property string $university_country
 * @property string $university_name
 */
class Universities extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'universities';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['university_country', 'university_name'], 'required'],
            [['university_country'], 'string', 'max' => 100],
            [['university_name'], 'string', 'max' => 155],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'university_id' => 'University ID',
            'university_country' => 'University Country',
            'university_name' => 'University Name',
        ];
    }
}
