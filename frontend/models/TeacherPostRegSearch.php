<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TeacherPostReg;

/**
 * TeacherPostRegSearch represents the model behind the search form about `frontend\models\TeacherPostReg`.
 */
class TeacherPostRegSearch extends TeacherPostReg
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['teacher_post_reg_id', 'start_from'], 'integer'],
            [['type_of_position', 'nationality', 'prefered_school_type', 'Current_residence', 'University_attended', 'first_name', 'last_name', 'email', 'phone', 'cv'], 'safe'],
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
        $query = TeacherPostReg::find();

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
            'teacher_post_reg_id' => $this->teacher_post_reg_id,
            'start_from' => $this->start_from,
        ]);

        $query->andFilterWhere(['like', 'type_of_position', $this->type_of_position])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'prefered_school_type', $this->prefered_school_type])
            ->andFilterWhere(['like', 'Current_residence', $this->Current_residence])
            ->andFilterWhere(['like', 'University_attended', $this->University_attended])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'cv', $this->cv]);

        return $dataProvider;
    }
}
