<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\SchoolConditions;

/**
 * SchoolConditionsSearch represents the model behind the search form about `frontend\models\SchoolConditions`.
 */
class SchoolConditionsSearch extends SchoolConditions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_condition_id'], 'integer'],
            [['school_condition_title', 'school_condition_text'], 'safe'],
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
        $query = SchoolConditions::find();

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
            'school_condition_id' => $this->school_condition_id,
        ]);

        $query->andFilterWhere(['like', 'school_condition_title', $this->school_condition_title])
            ->andFilterWhere(['like', 'school_condition_text', $this->school_condition_text]);

        return $dataProvider;
    }
}
