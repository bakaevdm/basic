<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inspection;

/**
 * InspectionSearch represents the model behind the search form of `app\models\Inspection`.
 */
class InspectionSearch extends Inspection
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDinspection', 'IDpet', 'IDcity', 'Building'], 'integer'],
            [['InspectionDate', 'Street'], 'safe'],
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
        $query = Inspection::find();

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
            'IDinspection' => $this->IDinspection,
            'IDpet' => $this->IDpet,
            'InspectionDate' => $this->InspectionDate,
            'IDcity' => $this->IDcity,
            'Building' => $this->Building,
        ]);

        $query->andFilterWhere(['like', 'Street', $this->Street]);

        return $dataProvider;
    }
}
