<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SchoolPostReg;

/**
 * SchoolPostRegSearch represents the model behind the search form about `backend\models\SchoolPostReg`.
 */
class SchoolPostRegSearch extends SchoolPostReg
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_post_reg_id'], 'integer'],
            [['sector', 'contact_name', 'school_name', 'contact_phone', 'region', 'contact_email', 'summary', 'document'], 'safe'],
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
        $query = SchoolPostReg::find();

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
            'school_post_reg_id' => $this->school_post_reg_id,
        ]);

        $query->andFilterWhere(['like', 'sector', $this->sector])
            ->andFilterWhere(['like', 'contact_name', $this->contact_name])
            ->andFilterWhere(['like', 'school_name', $this->school_name])
            ->andFilterWhere(['like', 'contact_phone', $this->contact_phone])
            ->andFilterWhere(['like', 'region', $this->region])
            ->andFilterWhere(['like', 'contact_email', $this->contact_email])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'document', $this->document]);

        return $dataProvider;
    }
}
