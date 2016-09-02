<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TeacherConditions;

/**
 * TeacherConditionsSearch represents the model behind the search form about `frontend\models\TeacherConditions`.
 */
class TeacherConditionsSearch extends TeacherConditions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_condition_id'], 'integer'],
            [['teacher_condition_title', 'teacher_condition_body'], 'safe'],
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
        $query = TeacherConditions::find();

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
            'teacher_condition_id' => $this->teacher_condition_id,
        ]);

        $query->andFilterWhere(['like', 'teacher_condition_title', $this->teacher_condition_title])
            ->andFilterWhere(['like', 'teacher_condition_body', $this->teacher_condition_body]);

        return $dataProvider;
    }
}
