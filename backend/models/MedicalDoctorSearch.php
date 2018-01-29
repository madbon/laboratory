<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MedicalDoctor;

/**
 * MedicalDoctorSearch represents the model behind the search form of `backend\models\MedicalDoctor`.
 */
class MedicalDoctorSearch extends MedicalDoctor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['medical_doctor_c'], 'integer'],
            [['first_name', 'middle_initial', 'last_name', 'prefix_title', 'license_number', 'signatory_img', 'suffix_title'], 'safe'],
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
        $query = MedicalDoctor::find();

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
            'medical_doctor_c' => $this->medical_doctor_c,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'middle_initial', $this->middle_initial])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'prefix_title', $this->prefix_title])
            ->andFilterWhere(['like', 'license_number', $this->license_number])
            ->andFilterWhere(['like', 'signatory_img', $this->signatory_img])
            ->andFilterWhere(['like', 'suffix_title', $this->suffix_title]);

        return $dataProvider;
    }
}
