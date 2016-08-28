<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "area_of_residence".
 *
 * @property integer $area_of_residence_id
 * @property string $area_of_residence
 */
class AreaOfResidence extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'area_of_residence';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area_of_residence'], 'required'],
            [['area_of_residence'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'area_of_residence_id' => 'Area Of Residence ID',
            'area_of_residence' => 'Area Of Residence',
        ];
    }
}
