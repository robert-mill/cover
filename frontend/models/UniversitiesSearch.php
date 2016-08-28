<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Universities;

/**
 * UniversitiesSearch represents the model behind the search form about `frontend\models\Universities`.
 */
class UniversitiesSearch extends Universities
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['university_id'], 'integer'],
            [['university_country', 'university_name'], 'safe'],
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
        $query = Universities::find();

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
            'university_id' => $this->university_id,
        ]);

        $query->andFilterWhere(['like', 'university_country', $this->university_country])
            ->andFilterWhere(['like', 'university_name', $this->university_name]);

        return $dataProvider;
    }
}
