<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vaccination;

/**
 * VaccinationSearch represents the model behind the search form of `app\models\Vaccination`.
 */
class VaccinationSearch extends Vaccination
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDvaccination', 'IDvaccine', 'IDpet'], 'integer'],
            [['VaccinationDate'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Vaccination::find();

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
            'IDvaccination' => $this->IDvaccination,
            'IDvaccine' => $this->IDvaccine,
            'VaccinationDate' => $this->VaccinationDate,
            'IDpet' => $this->IDpet,
        ]);

        return $dataProvider;
    }
}
