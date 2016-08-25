<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\AboutUsImages;

/**
 * AboutUsImagesSearch represents the model behind the search form about `backend\models\AboutUsImages`.
 */
class AboutUsImagesSearch extends AboutUsImages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['aboutus_image_id', 'aboutus_article_id_fk'], 'integer'],
            [['aboutus_imagename', 'aboutus_imageposition'], 'safe'],
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
        $query = AboutUsImages::find();

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
            'aboutus_image_id' => $this->aboutus_image_id,
            'aboutus_article_id_fk' => $this->aboutus_article_id_fk,
        ]);

        $query->andFilterWhere(['like', 'aboutus_imagename', $this->aboutus_imagename])
            ->andFilterWhere(['like', 'aboutus_imageposition', $this->aboutus_imageposition]);

        return $dataProvider;
    }
}
