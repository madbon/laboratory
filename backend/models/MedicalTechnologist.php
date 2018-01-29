<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "medical_technologist".
 *
 * @property int $medical_technologist_c
 * @property string $first_name
 * @property string $middle_initial
 * @property string $last_name
 * @property string $prefix_title
 * @property string $license_number
 * @property string $signatory_img
 * @property string $suffix_title
 */
class MedicalTechnologist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'medical_technologist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
            [['first_name', 'last_name', 'prefix_title', 'license_number', 'suffix_title'], 'string', 'max' => 50],
            [['middle_initial'], 'string', 'max' => 5],
            [['signatory_img'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'medical_technologist_c' => 'Medical Technologist C',
            'first_name' => 'First Name',
            'middle_initial' => 'Middle Initial',
            'last_name' => 'Last Name',
            'prefix_title' => 'Prefix Title',
            'license_number' => 'License Number',
            'signatory_img' => 'Signatory Img',
            'suffix_title' => 'Suffix Title',
        ];
    }

    public function getMedTech(){
        return $this->first_name." ".$this->middle_initial." ".$this->last_name.", ".$this->suffix_title;
    }

}