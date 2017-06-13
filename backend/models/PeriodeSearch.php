<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Periode;

/**
 * PeriodeSearch represents the model behind the search form about `backend\models\Periode`.
 */
class PeriodeSearch extends Periode
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_periode', 'id_user'], 'integer'],
            [['name_periode', 'desc'], 'safe'],
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
        $query = Periode::find();

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
            'id_periode' => $this->id_periode,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'name_periode', $this->name_periode])
            ->andFilterWhere(['like', 'desc', $this->desc]);

        return $dataProvider;
    }
}
