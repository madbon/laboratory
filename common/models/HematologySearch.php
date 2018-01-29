<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Hematology;

/**
 * HematologySearch represents the model behind the search form of `common\models\Hematology`.
 */
class HematologySearch extends Hematology
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hematology_c', 'patient_c', 'medical_technologist_c', 'medical_doctor_c'], 'integer'],
            [['hemoglobin', 'hematocrit', 'rbc', 'platelet_count', 'wbc', 'segmenters', 'lymphocytes', 'eosinophil', 'monocyte', 'blood_type', 'date_created'], 'safe'],
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
        $query = Hematology::find();

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
            'hematology_c' => $this->hematology_c,
            'patient_c' => $this->patient_c,
            'medical_technologist_c' => $this->medical_technologist_c,
            'medical_doctor_c' => $this->medical_doctor_c,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['like', 'hemoglobin', $this->hemoglobin])
            ->andFilterWhere(['like', 'hematocrit', $this->hematocrit])
            ->andFilterWhere(['like', 'rbc', $this->rbc])
            ->andFilterWhere(['like', 'platelet_count', $this->platelet_count])
            ->andFilterWhere(['like', 'wbc', $this->wbc])
            ->andFilterWhere(['like', 'segmenters', $this->segmenters])
            ->andFilterWhere(['like', 'lymphocytes', $this->lymphocytes])
            ->andFilterWhere(['like', 'eosinophil', $this->eosinophil])
            ->andFilterWhere(['like', 'monocyte', $this->monocyte])
            ->andFilterWhere(['like', 'blood_type', $this->blood_type]);

        return $dataProvider;
    }
}
