<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Food;

/**
 * FoodSearch represents the model behind the search form of `app\models\Food`.
 */
class FoodSearch extends Food
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'categories_id'], 'integer'],
            [['name'], 'safe'],
            [['calorie', 'protein', 'fats', 'carbon'], 'number'],
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
        $query = Food::find();

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
            'id' => $this->id,
            'categories_id' => $this->categories_id,
            'calorie' => $this->calorie,
            'protein' => $this->protein,
            'fats' => $this->fats,
            'carbon' => $this->carbon,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
