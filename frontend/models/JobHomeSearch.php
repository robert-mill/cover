<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\JobHome;

/**
 * JobHomeSearch represents the model behind the search form about `frontend\models\JobHome`.
 */
class JobHomeSearch extends JobHome
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['job_home_id'], 'integer'],
            [['job_home_title', 'job_home_body'], 'safe'],
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
        $query = JobHome::find();

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
            'job_home_id' => $this->job_home_id,
        ]);

        $query->andFilterWhere(['like', 'job_home_title', $this->job_home_title])
            ->andFilterWhere(['like', 'job_home_body', $this->job_home_body]);

        return $dataProvider;
    }
}
