<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\BloodChemistry;

/**
 * BloodChemistrySearch represents the model behind the search form of `common\models\BloodChemistry`.
 */
class BloodChemistrySearch extends BloodChemistry
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['blood_chemistry_c', 'patient_c', 'medical_technologist_c', 'medical_doctor_c'], 'integer'],
            [['random_blood_sugar', 'fasting_blood_sugar', 'blood_uric_acid', 'blood_urea_nitrogen', 'serum_creatinine', 'sgot_alt', 'sgpt_ast', 'lp_total_cholesterol', 'lp_triglycerides', 'lp_hdl', 'lp_ldl', 'glycosylated_hemoglobin', 'remarks', 'date_created'], 'safe'],
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
        $query = BloodChemistry::find();

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
            'blood_chemistry_c' => $this->blood_chemistry_c,
            'patient_c' => $this->patient_c,
            'medical_technologist_c' => $this->medical_technologist_c,
            'medical_doctor_c' => $this->medical_doctor_c,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['like', 'random_blood_sugar', $this->random_blood_sugar])
            ->andFilterWhere(['like', 'fasting_blood_sugar', $this->fasting_blood_sugar])
            ->andFilterWhere(['like', 'blood_uric_acid', $this->blood_uric_acid])
            ->andFilterWhere(['like', 'blood_urea_nitrogen', $this->blood_urea_nitrogen])
            ->andFilterWhere(['like', 'serum_creatinine', $this->serum_creatinine])
            ->andFilterWhere(['like', 'sgot_alt', $this->sgot_alt])
            ->andFilterWhere(['like', 'sgpt_ast', $this->sgpt_ast])
            ->andFilterWhere(['like', 'lp_total_cholesterol', $this->lp_total_cholesterol])
            ->andFilterWhere(['like', 'lp_triglycerides', $this->lp_triglycerides])
            ->andFilterWhere(['like', 'lp_hdl', $this->lp_hdl])
            ->andFilterWhere(['like', 'lp_ldl', $this->lp_ldl])
            ->andFilterWhere(['like', 'glycosylated_hemoglobin', $this->glycosylated_hemoglobin])
            ->andFilterWhere(['like', 'remarks', $this->remarks]);

        return $dataProvider;
    }
}
