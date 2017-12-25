<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "patients".
 *
 * @property integer $patient_c
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $sex
 * @property string $contact_number
 * @property string $dob
 * @property string $locale
 * @property string $district
 * @property string $division
 * @property string $complete_address
 * @property string $date_created
 */
class Patients extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patients';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'middle_name', 'last_name', 'sex', 'contact_number', 'dob', 'locale', 'district', 'division', 'complete_address'], 'required'],
            [['date_created'], 'safe'],
            [['first_name', 'middle_name', 'last_name', 'locale', 'district', 'division'], 'string', 'max' => 50],
            [['sex'], 'string', 'max' => 10],
            [['contact_number', 'dob'], 'string', 'max' => 20],
            [['complete_address'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'patient_c' => 'Patient C',
            'first_name' => 'First Name',
            'middle_name' => 'Middle Name',
            'last_name' => 'Last Name',
            'sex' => 'Sex',
            'contact_number' => 'Contact Number',
            'dob' => 'Dob',
            'locale' => 'Locale',
            'district' => 'District',
            'division' => 'Division',
            'complete_address' => 'Complete Address',
            'date_created' => 'Date Created',
        ];
    }
}
