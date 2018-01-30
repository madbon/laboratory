<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "urin_feca_cat_value_cms".
 *
 * @property int $c
 * @property int $urin_feca_cat_parent_cms_c
 * @property int $urin_feca_cat_subparent_cms_c
 * @property int $urin_feca_cat_child_cms_c
 * @property string $value
 */
class UrinFecaCatValueCms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'urin_feca_cat_value_cms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['urin_feca_cat_parent_cms_c', 'urin_feca_cat_subparent_cms_c', 'urin_feca_cat_child_cms_c', 'value'], 'required'],
            [['urin_feca_cat_parent_cms_c', 'urin_feca_cat_subparent_cms_c', 'urin_feca_cat_child_cms_c'], 'integer'],
            [['value'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c' => 'C',
            'urin_feca_cat_parent_cms_c' => 'Parent Category',
            'urin_feca_cat_subparent_cms_c' => 'Sub Parent Category',
            'urin_feca_cat_child_cms_c' => 'Child Category',
            'value' => 'Value',
        ];
    }
}
