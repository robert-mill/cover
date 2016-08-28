<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Home;

/**
 * HomeSearch represents the model behind the search form about `frontend\models\Home`.
 */
class HomeSearch extends Home
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['home_id'], 'integer'],
            [['home_title', 'home_body', 'section'], 'safe'],
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
        $query = Home::find();

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
            'home_id' => $this->home_id,
        ]);

        $query->andFilterWhere(['like', 'home_title', $this->home_title])
            ->andFilterWhere(['like', 'home_body', $this->home_body])
            ->andFilterWhere(['like', 'section', $this->section]);

        return $dataProvider;
    }
}
