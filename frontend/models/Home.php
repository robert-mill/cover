<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "home".
 *
 * @property integer $home_id
 * @property string $home_title
 * @property string $home_body
 * @property string $section
 */
class Home extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {

        return 'home';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['home_body'], 'string'],
            [['home_title'], 'string', 'max' => 255],
            [['section'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'home_id' => 'Home ID',
            'home_title' => 'Home Title',
            'home_body' => 'Home Body',
            'section' => 'Section',
        ];
    }
}
