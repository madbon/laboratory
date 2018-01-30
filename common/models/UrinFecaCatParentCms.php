<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "urin_feca_cat_parent_cms".
 *
 * @property int $c
 * @property string $parent_category_name
 */
class UrinFecaCatParentCms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'urin_feca_cat_parent_cms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_category_name'], 'required'],
            [['parent_category_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c' => 'C',
            'parent_category_name' => 'Parent Category Name',
        ];
    }
}
