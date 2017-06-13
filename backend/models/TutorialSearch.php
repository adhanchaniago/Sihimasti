<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tutorial;

/**
 * TutorialSearch represents the model behind the search form about `backend\models\Tutorial`.
 */
class TutorialSearch extends Tutorial
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_user', 'id_matakuliah'], 'integer'],
            [['topik', 'tutor', 'lokasi', 'tanggal_pelaksanaan', 'created_date', 'updated_date', 'keterangan'], 'safe'],
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
        $query = Tutorial::find();

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
            'tanggal_pelaksanaan' => $this->tanggal_pelaksanaan,
            'created_date' => $this->created_date,
            'updated_date' => $this->updated_date,
            'id_user' => $this->id_user,
            'id_matakuliah' => $this->id_matakuliah,
        ]);

        $query->andFilterWhere(['like', 'topik', $this->topik])
            ->andFilterWhere(['like', 'tutor', $this->tutor])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi])
            ->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
