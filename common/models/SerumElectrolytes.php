<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "serum_electrolytes".
 *
 * @property int $serum_electrolytes_c
 * @property int $patient_c
 * @property string $sodium
 * @property string $potassium
 * @property string $chloride
 * @property string $ionized_calcium
 * @property string $total_calcium
 * @property int $medical_technologist_c
 * @property int $medical_doctor_c
 * @property string $date_created
 */
class SerumElectrolytes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'serum_electrolytes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_c', 'sodium', 'potassium', 'chloride', 'ionized_calcium', 'total_calcium', 'medical_technologist_c', 'medical_doctor_c'], 'required'],
            [['patient_c', 'medical_technologist_c', 'medical_doctor_c'], 'integer'],
            [['date_created'], 'safe'],
            [['sodium', 'potassium', 'chloride', 'ionized_calcium', 'total_calcium'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'serum_electrolytes_c' => 'Serum Electrolytes C',
            'patient_c' => 'Patient C',
            'sodium' => 'Sodium',
            'potassium' => 'Potassium',
            'chloride' => 'Chloride',
            'ionized_calcium' => 'Ionized Calcium',
            'total_calcium' => 'Total Calcium',
            'medical_technologist_c' => 'Medical Technologist C',
            'medical_doctor_c' => 'Medical Doctor C',
            'date_created' => 'Date Created',
        ];
    }
}
