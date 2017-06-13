<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\MataKuliah;

/**
 * MataKuliahSearch represents the model behind the search form about `backend\models\MataKuliah`.
 */
class MataKuliahSearch extends MataKuliah
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_user'], 'integer'],
            [['nama_matakuliah', 'created_date', 'updated_date', 'kode_matakuliah'], 'safe'],
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
        $query = MataKuliah::find();

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
            'created_date' => $this->created_date,
            'updated_date' => $this->updated_date,
            'id_user' => $this->id_user,
        ]);

        $query->andFilterWhere(['like', 'nama_matakuliah', $this->nama_matakuliah])
            ->andFilterWhere(['like', 'kode_matakuliah', $this->kode_matakuliah]);

        return $dataProvider;
    }
}
