<?php

namespace kouosl\course\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\course\models\Course;

/**
 * CoursesSearch represents the model behind the search form of `kouosl\course\models\course`.
 */
class CoursesSearch extends Course
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['isim', 'baslangic', 'bitis'], 'required'],
            [['isim', 'baslangic', 'bitis'], 'string', 'max' => 30],
        ];
    }


    /**
     * {@inheritdoc}
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
        $query = Course::find();

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
            'id' => $this->id,
            'isim' => $this->isim,
            'baslangic' => $this->baslangic,
            'bitis' => $this->bitis,
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim]);

        return $dataProvider;
    }
}
