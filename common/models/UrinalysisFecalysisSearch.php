<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\UrinalysisFecalysis;

/**
 * UrinalysisFecalysisSearch represents the model behind the search form of `common\models\UrinalysisFecalysis`.
 */
class UrinalysisFecalysisSearch extends UrinalysisFecalysis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['urinalysis_fecalysis_c', 'patient_c', 'urin_macro_color', 'urin_macro_transparency', 'urin_macro_ph', 'urin_macro_specific_gravity', 'urin_macro_protein', 'urin_macro_glucose', 'urin_micro_bacteria', 'urin_micro_epithelial_cells', 'urin_micro_mucus_threads', 'urin_micro_amorphous', 'urin_others_casts', 'urin_others_crystals', 'feca_macro_color', 'feca_macro_consistency', 'feca_micro_wbc', 'feca_micro_rbc', 'remarks', 'medical_technologist_c', 'medical_doctor_c'], 'integer'],
            [['urin_micro_wbc', 'urin_micro_rbc', 'feca_others', 'date_created'], 'safe'],
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
        $query = UrinalysisFecalysis::find();

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
            'urinalysis_fecalysis_c' => $this->urinalysis_fecalysis_c,
            'patient_c' => $this->patient_c,
            'urin_macro_color' => $this->urin_macro_color,
            'urin_macro_transparency' => $this->urin_macro_transparency,
            'urin_macro_ph' => $this->urin_macro_ph,
            'urin_macro_specific_gravity' => $this->urin_macro_specific_gravity,
            'urin_macro_protein' => $this->urin_macro_protein,
            'urin_macro_glucose' => $this->urin_macro_glucose,
            'urin_micro_bacteria' => $this->urin_micro_bacteria,
            'urin_micro_epithelial_cells' => $this->urin_micro_epithelial_cells,
            'urin_micro_mucus_threads' => $this->urin_micro_mucus_threads,
            'urin_micro_amorphous' => $this->urin_micro_amorphous,
            'urin_others_casts' => $this->urin_others_casts,
            'urin_others_crystals' => $this->urin_others_crystals,
            'feca_macro_color' => $this->feca_macro_color,
            'feca_macro_consistency' => $this->feca_macro_consistency,
            'feca_micro_wbc' => $this->feca_micro_wbc,
            'feca_micro_rbc' => $this->feca_micro_rbc,
            'remarks' => $this->remarks,
            'medical_technologist_c' => $this->medical_technologist_c,
            'medical_doctor_c' => $this->medical_doctor_c,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['like', 'urin_micro_wbc', $this->urin_micro_wbc])
            ->andFilterWhere(['like', 'urin_micro_rbc', $this->urin_micro_rbc])
            ->andFilterWhere(['like', 'feca_others', $this->feca_others]);

        return $dataProvider;
    }
}
