<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "about_us_images".
 *
 * @property integer $aboutus_image_id
 * @property integer $aboutus_article_id_fk
 * @property string $aboutus_imagename
 * @property string $aboutus_imageposition
 */
class AboutUsImages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'about_us_images';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aboutus_article_id_fk'], 'required'],
            [['aboutus_article_id_fk'], 'integer'],
            [['aboutus_imagename'], 'string', 'max' => 200],
            [['aboutus_imageposition'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'aboutus_image_id' => 'Aboutus Image ID',
            'aboutus_article_id_fk' => 'Aboutus Article Id Fk',
            'aboutus_imagename' => 'Aboutus Imagename',
            'aboutus_imageposition' => 'Aboutus Imageposition',
        ];
    }
}
