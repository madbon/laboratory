<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UrinFecaCatValueCms;

/**
 * UrinFecaCatValueCmsSearch represents the model behind the search form of `common\models\UrinFecaCatValueCms`.
 */
class UrinFecaCatValueCmsSearch extends UrinFecaCatValueCms
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c', 'urin_feca_cat_parent_cms_c', 'urin_feca_cat_subparent_cms_c', 'urin_feca_cat_child_cms_c'], 'integer'],
            [['value'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = UrinFecaCatValueCms::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'c' => $this->c,
            'urin_feca_cat_parent_cms_c' => $this->urin_feca_cat_parent_cms_c,
            'urin_feca_cat_subparent_cms_c' => $this->urin_feca_cat_subparent_cms_c,
            'urin_feca_cat_child_cms_c' => $this->urin_feca_cat_child_cms_c,
        ]);

        $query->andFilterWhere(['like', 'value', $this->value]);

        return $dataProvider;
    }
}
