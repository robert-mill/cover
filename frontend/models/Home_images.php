<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "home_images".
 *
 * @property integer $home_image_id
 * @property integer $home_article_id_fk
 * @property string $home_image_name
 */
class Home_images extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'home_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['home_article_id_fk'], 'integer'],
            [['home_image_name'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'home_image_id' => 'Home Image ID',
            'home_article_id_fk' => 'Home Article Id Fk',
            'home_image_name' => 'Home Image Name',
        ];
    }
}
