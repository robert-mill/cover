<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Nationality;

/**
 * NationalitySearch represents the model behind the search form about `backend\models\Nationality`.
 */
class NationalitySearch extends Nationality
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nationality_id', 'nationality_live'], 'integer'],
            [['nationality'], 'safe'],
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
        $query = Nationality::find();

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
            'nationality_id' => $this->nationality_id,
            'nationality_live' => $this->nationality_live,
        ]);

        $query->andFilterWhere(['like', 'nationality', $this->nationality]);

        return $dataProvider;
    }
}
