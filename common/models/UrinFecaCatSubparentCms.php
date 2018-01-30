<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "urin_feca_cat_subparent_cms".
 *
 * @property int $c
 * @property int $urin_feca_cat_parent_cms_c
 * @property string $sub_parent_category_name
 */
class UrinFecaCatSubparentCms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'urin_feca_cat_subparent_cms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['urin_feca_cat_parent_cms_c', 'sub_parent_category_name'], 'required'],
            [['urin_feca_cat_parent_cms_c'], 'integer'],
            [['sub_parent_category_name'], 'string', 'max' => 150],
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
            'sub_parent_category_name' => 'Sub Parent Category Name',
        ];
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentCategory()
    {
        return $this->hasOne(UrinFecaCatParentCms::className(), ['c' => 'urin_feca_cat_parent_cms_c']);
    }
}
