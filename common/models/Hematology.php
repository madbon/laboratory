<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hematology".
 *
 * @property int $hematology_c
 * @property int $patient_c
 * @property string $hemoglobin
 * @property string $hematocrit
 * @property string $rbc
 * @property string $platelet_count
 * @property string $wbc
 * @property string $segmenters
 * @property string $lymphocytes
 * @property string $eosinophil
 * @property string $monocyte
 * @property string $blood_type
 * @property int $medical_technologist_c
 * @property int $medical_doctor_c
 * @property string $date_created
 */
class Hematology extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hematology';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_c', 'hemoglobin', 'hematocrit', 'rbc', 'platelet_count', 'wbc', 'segmenters', 'lymphocytes', 'eosinophil', 'monocyte', 'blood_type', 'medical_technologist_c', 'medical_doctor_c'], 'required'],
            [['patient_c', 'medical_technologist_c', 'medical_doctor_c'], 'integer'],
            [['date_created'], 'safe'],
            [['hemoglobin', 'hematocrit', 'rbc', 'platelet_count', 'wbc', 'segmenters', 'lymphocytes', 'eosinophil', 'monocyte', 'blood_type'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hematology_c' => "Hematology ID",
            'patient_c' => 'Patient Name',
            'hemoglobin' => 'Hemoglobin',
            'hematocrit' => 'Hematocrit',
            'rbc' => 'RBC',
            'platelet_count' => 'Platelet Count',
            'wbc' => 'WBC',
            'segmenters' => 'Segmenters',
            'lymphocytes' => 'Lymphocytes',
            'eosinophil' => 'Eosinophil',
            'monocyte' => 'Monocyte',
            'blood_type' => 'Blood Type',
            'medical_technologist_c' => 'Medical Technologist',
            'medical_doctor_c' => 'Medical Doctor',
            'date_created' => 'Date Created',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patients::className(), ['patient_c' => 'patient_c']);
    }
}
