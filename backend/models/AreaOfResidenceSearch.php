<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AreaOfResidence;

/**
 * AreaOfResidenceSearch represents the model behind the search form about `backend\models\AreaOfResidence`.
 */
class AreaOfResidenceSearch extends AreaOfResidence
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['area_of_residence_id'], 'integer'],
            [['area_of_residence'], 'safe'],
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
        $query = AreaOfResidence::find();

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
            'area_of_residence_id' => $this->area_of_residence_id,
        ]);

        $query->andFilterWhere(['like', 'area_of_residence', $this->area_of_residence]);

        return $dataProvider;
    }
}
