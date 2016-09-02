<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "school_post_reg".
 *
 * @property integer $school_post_reg_id
 * @property string $sector
 * @property string $contact_name
 * @property string $school_name
 * @property string $contact_phone
 * @property string $region
 * @property string $contact_email
 * @property string $summary
 * @property string $document
 * @property mixed document_original
 */
class SchoolPostReg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school_post_reg';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contact_name', 'contact_phone', 'contact_email', 'summary'], 'required'],
            [['summary'], 'string'],
            [['sector'], 'string', 'max' => 140],
            [['contact_name', 'school_name', 'document'], 'string', 'max' => 200],
            [['contact_phone'], 'string', 'max' => 15],
            [['region'], 'string', 'max' => 100],
            [['document'],'file'],
            [['contact_email'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'school_post_reg_id' => 'School Post Reg ID',
            'sector' => 'Sector',
            'contact_name' => 'Contact Name',
            'school_name' => 'School Name',
            'contact_phone' => 'Contact Phone',
            'region' => 'Region',
            'contact_email' => 'Contact Email',
            'summary' => 'Summary',
            'file' => 'Document - details of post',
        ];
    }
}
