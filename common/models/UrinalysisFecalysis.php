<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "urinalysis_fecalysis".
 *
 * @property int $urinalysis_fecalysis_c
 * @property int $patient_c
 * @property int $urin_macro_color
 * @property int $urin_macro_transparency
 * @property int $urin_macro_ph
 * @property int $urin_macro_specific_gravity
 * @property int $urin_macro_protein
 * @property int $urin_macro_glucose
 * @property string $urin_micro_wbc
 * @property string $urin_micro_rbc
 * @property int $urin_micro_bacteria
 * @property int $urin_micro_epithelial_cells
 * @property int $urin_micro_mucus_threads
 * @property int $urin_micro_amorphous
 * @property int $urin_others_casts
 * @property int $urin_others_crystals
 * @property int $feca_macro_color
 * @property int $feca_macro_consistency
 * @property int $feca_micro_wbc
 * @property int $feca_micro_rbc
 * @property string $feca_others
 * @property int $remarks
 * @property int $medical_technologist_c
 * @property int $medical_doctor_c
 * @property string $date_created
 */
class UrinalysisFecalysis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'urinalysis_fecalysis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_c', 'urin_macro_color', 'urin_macro_transparency', 'urin_macro_ph', 'urin_macro_specific_gravity', 'urin_macro_protein', 'urin_macro_glucose', 'urin_micro_wbc', 'urin_micro_rbc', 'urin_micro_bacteria', 'urin_micro_epithelial_cells', 'urin_micro_mucus_threads', 'urin_micro_amorphous', 'urin_others_casts', 'urin_others_crystals', 'feca_macro_color', 'feca_macro_consistency', 'feca_micro_wbc', 'feca_micro_rbc', 'feca_others', 'remarks', 'medical_technologist_c', 'medical_doctor_c'], 'required'],
            [['patient_c', 'urin_macro_color', 'urin_macro_transparency', 'urin_macro_ph', 'urin_macro_specific_gravity', 'urin_macro_protein', 'urin_macro_glucose', 'urin_micro_bacteria', 'urin_micro_epithelial_cells', 'urin_micro_mucus_threads', 'urin_micro_amorphous', 'urin_others_casts', 'urin_others_crystals', 'feca_macro_color', 'feca_macro_consistency', 'feca_micro_wbc', 'feca_micro_rbc', 'remarks', 'medical_technologist_c', 'medical_doctor_c'], 'integer'],
            [['date_created'], 'safe'],
            [['urin_micro_wbc', 'urin_micro_rbc'], 'string', 'max' => 20],
            [['feca_others'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'urinalysis_fecalysis_c' => 'Urinalysis Fecalysis C',
            'patient_c' => 'Patient C',
            'urin_macro_color' => 'Urin Macro Color',
            'urin_macro_transparency' => 'Urin Macro Transparency',
            'urin_macro_ph' => 'Urin Macro Ph',
            'urin_macro_specific_gravity' => 'Urin Macro Specific Gravity',
            'urin_macro_protein' => 'Urin Macro Protein',
            'urin_macro_glucose' => 'Urin Macro Glucose',
            'urin_micro_wbc' => 'Urin Micro Wbc',
            'urin_micro_rbc' => 'Urin Micro Rbc',
            'urin_micro_bacteria' => 'Urin Micro Bacteria',
            'urin_micro_epithelial_cells' => 'Urin Micro Epithelial Cells',
            'urin_micro_mucus_threads' => 'Urin Micro Mucus Threads',
            'urin_micro_amorphous' => 'Urin Micro Amorphous',
            'urin_others_casts' => 'Urin Others Casts',
            'urin_others_crystals' => 'Urin Others Crystals',
            'feca_macro_color' => 'Feca Macro Color',
            'feca_macro_consistency' => 'Feca Macro Consistency',
            'feca_micro_wbc' => 'Feca Micro Wbc',
            'feca_micro_rbc' => 'Feca Micro Rbc',
            'feca_others' => 'Feca Others',
            'remarks' => 'Remarks',
            'medical_technologist_c' => 'Medical Technologist C',
            'medical_doctor_c' => 'Medical Doctor C',
            'date_created' => 'Date Created',
        ];
    }
}
