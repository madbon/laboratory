<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Miscellaneous;

/**
 * MiscellaneousSearch represents the model behind the search form of `common\models\Miscellaneous`.
 */
class MiscellaneousSearch extends Miscellaneous
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['miscellaneous_c', 'patient_c', 'medical_technologist_c', 'medical_doctor_c'], 'integer'],
            [['dengue_nsi', 'dengue_igg_igm', 'trophonin_i', 'salmonella_typhi_igg', 'salmonella_typhi_igm', 'hbsag', 'pregnancy_test', 'koh', 'date_created'], 'safe'],
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
        $query = Miscellaneous::find();

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
            'miscellaneous_c' => $this->miscellaneous_c,
            'patient_c' => $this->patient_c,
            'medical_technologist_c' => $this->medical_technologist_c,
            'medical_doctor_c' => $this->medical_doctor_c,
            'date_created' => $this->date_created,
        ]);

        $query->andFilterWhere(['like', 'dengue_nsi', $this->dengue_nsi])
            ->andFilterWhere(['like', 'dengue_igg_igm', $this->dengue_igg_igm])
            ->andFilterWhere(['like', 'trophonin_i', $this->trophonin_i])
            ->andFilterWhere(['like', 'salmonella_typhi_igg', $this->salmonella_typhi_igg])
            ->andFilterWhere(['like', 'salmonella_typhi_igm', $this->salmonella_typhi_igm])
            ->andFilterWhere(['like', 'hbsag', $this->hbsag])
            ->andFilterWhere(['like', 'pregnancy_test', $this->pregnancy_test])
            ->andFilterWhere(['like', 'koh', $this->koh]);

        return $dataProvider;
    }
}
