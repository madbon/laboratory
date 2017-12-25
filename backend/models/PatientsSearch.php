<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Patients;

/**
 * PatientsSearch represents the model behind the search form about `backend\models\Patients`.
 */
class PatientsSearch extends Patients
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_c'], 'integer'],
            [['first_name', 'middle_name', 'last_name', 'sex', 'contact_number', 'dob', 'locale', 'district', 'division', 'complete_address', 'date_created'], 'safe'],
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
        $query = Patients::find();

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
            'patient_c' => $this->patient_c,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'contact_number', $this->contact_number])
            ->andFilterWhere(['like', 'dob', $this->dob])
            ->andFilterWhere(['like', 'locale', $this->locale])
            ->andFilterWhere(['like', 'district', $this->district])
            ->andFilterWhere(['like', 'division', $this->division])
            ->andFilterWhere(['like', 'complete_address', $this->complete_address]);

        return $dataProvider;
    }
}
