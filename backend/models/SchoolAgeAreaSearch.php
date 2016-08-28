<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SchoolAgeArea;

/**
 * SchoolAgeAreaSearch represents the model behind the search form about `backend\models\SchoolAgeArea`.
 */
class SchoolAgeAreaSearch extends SchoolAgeArea
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_age_area'], 'integer'],
            [['school_age'], 'safe'],
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
        $query = SchoolAgeArea::find();

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
            'school_age_area' => $this->school_age_area,
        ]);

        $query->andFilterWhere(['like', 'school_age', $this->school_age]);

        return $dataProvider;
    }
}
