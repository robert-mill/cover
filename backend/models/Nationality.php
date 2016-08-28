<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "nationality".
 *
 * @property integer $nationality_id
 * @property string $nationality
 */
class Nationality extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nationality';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nationality'], 'required'],
            [['nationality'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nationality_id' => 'Nationality ID',
            'nationality' => 'Nationality',
        ];
    }
}
