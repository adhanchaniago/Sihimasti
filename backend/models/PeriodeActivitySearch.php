<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PeriodeActivity;

/**
 * PeriodeActivitySearch represents the model behind the search form about `backend\models\PeriodeActivity`.
 */
class PeriodeActivitySearch extends PeriodeActivity
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_activity', 'status', 'id_periode'], 'integer'],
            [['name_activity', 'desc_activity', 'time_activity', 'created_time', 'updated_time'], 'safe'],
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
        $query = PeriodeActivity::find();

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
            'id_activity' => $this->id_activity,
            'time_activity' => $this->time_activity,
            'status' => $this->status,
            'created_time' => $this->created_time,
            'updated_time' => $this->updated_time,
            'id_periode' => $this->id_periode,
        ]);

        $query->andFilterWhere(['like', 'name_activity', $this->name_activity])
            ->andFilterWhere(['like', 'desc_activity', $this->desc_activity]);

        return $dataProvider;
    }
}
