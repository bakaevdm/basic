<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pet;

/**
 * PetSearch represents the model behind the search form of `app\models\Pet`.
 */
class PetSearch extends Pet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['IDpet', 'IDbreed', 'Sex', 'Sterilization', 'IDwool', 'IDfeed'], 'integer'],
            [['Nickname', 'DoB'], 'safe'],
            [['Weight'], 'number'],
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
        $query = Pet::find();

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
            'IDpet' => $this->IDpet,
            'IDbreed' => $this->IDbreed,
            'DoB' => $this->DoB,
            'Sex' => $this->Sex,
            'Sterilization' => $this->Sterilization,
            'IDwool' => $this->IDwool,
            'Weight' => $this->Weight,
            'IDfeed' => $this->IDfeed,
        ]);

        $query->andFilterWhere(['like', 'Nickname', $this->Nickname]);

        return $dataProvider;
    }
}
