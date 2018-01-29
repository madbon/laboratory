<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\SerumElectrolytes;

/**
 * SerumElectrolytesSearch represents the model behind the search form of `common\models\SerumElectrolytes`.
 */
class SerumElectrolytesSearch extends SerumElectrolytes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['serum_electrolytes_c', 'patient_c', 'medical_technologist_c', 'medical_doctor_c'], 'integer'],
            [['sodium', 'potassium', 'chloride', 'ionized_calcium', 'total_calcium', 'date_created'], 'safe'],
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
        $query = SerumElectrolytes::find();

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
            'serum_electrolytes_c' => $this->serum_electrolytes_c,
            'patient_c' => $this->patient_c,
            'medical_technologist_c' => $this->medical_technologist_c,
            'medical_doctor_c' => $this->medical_doctor_c,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['like', 'sodium', $this->sodium])
            ->andFilterWhere(['like', 'potassium', $this->potassium])
            ->andFilterWhere(['like', 'chloride', $this->chloride])
            ->andFilterWhere(['like', 'ionized_calcium', $this->ionized_calcium])
            ->andFilterWhere(['like', 'total_calcium', $this->total_calcium]);

        return $dataProvider;
    }
}
