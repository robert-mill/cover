<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "teaching_position".
 *
 * @property integer $teaching_position_id
 * @property string $teaching_position
 */
class TeachingPosition extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'teaching_position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teaching_position'], 'required'],
            [['teaching_position'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'teaching_position_id' => 'Teaching Position ID',
            'teaching_position' => 'Teaching Position',
        ];
    }
}
