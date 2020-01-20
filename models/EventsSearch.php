<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Events;

/**
 * EventsSearch represents the model behind the search form of `app\models\Events`.
 */
class EventsSearch extends Events
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDevent', 'IDcity', 'IDpet'], 'integer'],
            [['EventName', 'EventDate', 'Street', 'Building'], 'safe'],
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
        $query = Events::find();

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
            'IDevent' => $this->IDevent,
            'EventDate' => $this->EventDate,
            'IDcity' => $this->IDcity,
            'IDpet' => $this->IDpet,
        ]);

        $query->andFilterWhere(['like', 'EventName', $this->EventName])
            ->andFilterWhere(['like', 'Street', $this->Street])
            ->andFilterWhere(['like', 'Building', $this->Building]);

        return $dataProvider;
    }
}
