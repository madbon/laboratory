<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UrinFecaCatParentCms;

/**
 * UrinFecaCatParentCmsSearch represents the model behind the search form of `common\models\UrinFecaCatParentCms`.
 */
class UrinFecaCatParentCmsSearch extends UrinFecaCatParentCms
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['c'], 'integer'],
            [['parent_category_name'], 'safe'],
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
        $query = UrinFecaCatParentCms::find();

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
        ]);

        $query->andFilterWhere(['like', 'parent_category_name', $this->parent_category_name]);

        return $dataProvider;
    }
}
