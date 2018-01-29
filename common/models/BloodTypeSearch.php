<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BloodType;

/**
 * BloodTypeSearch represents the model behind the search form of `common\models\BloodType`.
 */
class BloodTypeSearch extends BloodType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['blood_type_c'], 'integer'],
            [['blood_type'], 'safe'],
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
        $query = BloodType::find();

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
            'blood_type_c' => $this->blood_type_c,
        ]);

        $query->andFilterWhere(['like', 'blood_type', $this->blood_type]);

        return $dataProvider;
    }
}
