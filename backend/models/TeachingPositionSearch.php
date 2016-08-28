<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TeachingPosition;

/**
 * TeachingPositionSearch represents the model behind the search form about `backend\models\TeachingPosition`.
 */
class TeachingPositionSearch extends TeachingPosition
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teaching_position_id'], 'integer'],
            [['teaching_position'], 'safe'],
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
        $query = TeachingPosition::find();

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
            'teaching_position_id' => $this->teaching_position_id,
        ]);

        $query->andFilterWhere(['like', 'teaching_position', $this->teaching_position]);

        return $dataProvider;
    }
}
