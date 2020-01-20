<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Wool;

/**
 * WoolSearch represents the model behind the search form of `app\models\Wool`.
 */
class WoolSearch extends Wool
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDwool', 'IDcosmetics'], 'integer'],
            [['TypeWool', 'ColorWool'], 'safe'],
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
        $query = Wool::find();

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
            'IDwool' => $this->IDwool,
            'IDcosmetics' => $this->IDcosmetics,
        ]);

        $query->andFilterWhere(['like', 'TypeWool', $this->TypeWool])
            ->andFilterWhere(['like', 'ColorWool', $this->ColorWool]);

        return $dataProvider;
    }
}
