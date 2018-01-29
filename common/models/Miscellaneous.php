<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "miscellaneous".
 *
 * @property int $miscellaneous_c
 * @property int $patient_c
 * @property string $dengue_nsi
 * @property string $dengue_igg_igm
 * @property string $trophonin_i
 * @property string $salmonella_typhi_igg
 * @property string $salmonella_typhi_igm
 * @property string $hbsag
 * @property string $pregnancy_test
 * @property string $koh
 * @property int $medical_technologist_c
 * @property int $medical_doctor_c
 * @property string $date_created
 */
class Miscellaneous extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'miscellaneous';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_c', 'dengue_nsi', 'dengue_igg_igm', 'trophonin_i', 'salmonella_typhi_igg', 'salmonella_typhi_igm', 'hbsag', 'pregnancy_test', 'koh', 'medical_technologist_c', 'medical_doctor_c'], 'required'],
            [['patient_c', 'medical_technologist_c', 'medical_doctor_c'], 'integer'],
            [['date_created'], 'safe'],
            [['dengue_nsi', 'dengue_igg_igm', 'trophonin_i', 'salmonella_typhi_igg', 'salmonella_typhi_igm', 'hbsag', 'pregnancy_test', 'koh'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'miscellaneous_c' => 'Miscellaneous C',
            'patient_c' => 'Patient C',
            'dengue_nsi' => 'Dengue Nsi',
            'dengue_igg_igm' => 'Dengue Igg Igm',
            'trophonin_i' => 'Trophonin I',
            'salmonella_typhi_igg' => 'Salmonella Typhi Igg',
            'salmonella_typhi_igm' => 'Salmonella Typhi Igm',
            'hbsag' => 'Hbsag',
            'pregnancy_test' => 'Pregnancy Test',
            'koh' => 'Koh',
            'medical_technologist_c' => 'Medical Technologist C',
            'medical_doctor_c' => 'Medical Doctor C',
            'date_created' => 'Date Created',
        ];
    }
}
