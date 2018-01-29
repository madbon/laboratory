<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "blood_type".
 *
 * @property int $blood_type_c
 * @property string $blood_type
 */
class BloodType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'blood_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['blood_type'], 'required'],
            [['blood_type'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'blood_type_c' => 'Blood Type C',
            'blood_type' => 'Blood Type',
        ];
    }
}
