<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AboutUs;

/**
 * AboutUsSearch represents the model behind the search form about `backend\models\AboutUs`.
 */
class AboutUsSearch extends AboutUs
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aboutus_id'], 'integer'],
            [['aboutus_title', 'aboutus_body'], 'safe'],
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
        $query = AboutUs::find();

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
            'aboutus_id' => $this->aboutus_id,
        ]);

        $query->andFilterWhere(['like', 'aboutus_title', $this->aboutus_title])
            ->andFilterWhere(['like', 'aboutus_body', $this->aboutus_body]);

        return $dataProvider;
    }
}
