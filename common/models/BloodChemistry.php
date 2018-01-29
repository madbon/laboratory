<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blood_chemistry".
 *
 * @property int $blood_chemistry_c
 * @property int $patient_c
 * @property string $random_blood_sugar
 * @property string $fasting_blood_sugar
 * @property string $blood_uric_acid
 * @property string $blood_urea_nitrogen
 * @property string $serum_creatinine
 * @property string $sgot_alt
 * @property string $sgpt_ast
 * @property string $lp_total_cholesterol
 * @property string $lp_triglycerides
 * @property string $lp_hdl
 * @property string $lp_ldl
 * @property string $glycosylated_hemoglobin
 * @property string $remarks
 * @property int $medical_technologist_c
 * @property int $medical_doctor_c
 * @property string $date_created
 */
class BloodChemistry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blood_chemistry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_c', 'random_blood_sugar', 'fasting_blood_sugar', 'blood_uric_acid', 'blood_urea_nitrogen', 'serum_creatinine', 'sgot_alt', 'sgpt_ast', 'lp_total_cholesterol', 'lp_triglycerides', 'lp_hdl', 'lp_ldl', 'glycosylated_hemoglobin', 'remarks', 'medical_technologist_c', 'medical_doctor_c'], 'required'],
            [['patient_c', 'medical_technologist_c', 'medical_doctor_c'], 'integer'],
            [['date_created'], 'safe'],
            [['random_blood_sugar', 'fasting_blood_sugar', 'blood_uric_acid', 'blood_urea_nitrogen', 'serum_creatinine', 'sgot_alt', 'sgpt_ast', 'lp_total_cholesterol', 'lp_triglycerides', 'lp_hdl', 'lp_ldl', 'glycosylated_hemoglobin'], 'string', 'max' => 10],
            [['remarks'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'blood_chemistry_c' => 'Blood Chemistry C',
            'patient_c' => 'Patient C',
            'random_blood_sugar' => 'Random Blood Sugar',
            'fasting_blood_sugar' => 'Fasting Blood Sugar',
            'blood_uric_acid' => 'Blood Uric Acid',
            'blood_urea_nitrogen' => 'Blood Urea Nitrogen',
            'serum_creatinine' => 'Serum Creatinine',
            'sgot_alt' => 'Sgot Alt',
            'sgpt_ast' => 'Sgpt Ast',
            'lp_total_cholesterol' => 'Lp Total Cholesterol',
            'lp_triglycerides' => 'Lp Triglycerides',
            'lp_hdl' => 'Lp Hdl',
            'lp_ldl' => 'Lp Ldl',
            'glycosylated_hemoglobin' => 'Glycosylated Hemoglobin',
            'remarks' => 'Remarks',
            'medical_technologist_c' => 'Medical Technologist C',
            'medical_doctor_c' => 'Medical Doctor C',
            'date_created' => 'Date Created',
        ];
    }
}
