<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "urin_feca_cat_child_cms".
 *
 * @property int $c
 * @property int $urin_feca_cat_parent_cms_c
 * @property int $urin_feca_cat_subparent_cms_c
 * @property string $child_name
 */
class UrinFecaCatChildCms extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'urin_feca_cat_child_cms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['urin_feca_cat_parent_cms_c', 'urin_feca_cat_subparent_cms_c', 'child_name'], 'required'],
            [['urin_feca_cat_parent_cms_c', 'urin_feca_cat_subparent_cms_c'], 'integer'],
            [['child_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'c' => 'ID',
            'urin_feca_cat_parent_cms_c' => 'Parent Category',
            'urin_feca_cat_subparent_cms_c' => 'Sub Parent Category',
            'child_name' => 'Child Categort Name',
        ];
    }

     /**
     * @return \yii\db\ActiveQuery
     */
    public function getParentCategory()
    {
        return $this->hasOne(UrinFecaCatParentCms::className(), ['c' => 'urin_feca_cat_parent_cms_c']);
    }


     /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubCategory()
    {
        return $this->hasOne(UrinFecaCatSubparentCms::className(), ['c' => 'urin_feca_cat_subparent_cms_c']);
    }
}
