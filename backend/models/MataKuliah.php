<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "mata_kuliah".
 *
 * @property integer $id
 * @property string $nama_matakuliah
 * @property string $created_date
 * @property string $updated_date
 * @property integer $id_user
 * @property string $kode_matakuliah
 */
class MataKuliah extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mata_kuliah';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_matakuliah', 'created_date', 'updated_date', 'id_user', 'kode_matakuliah'], 'required'],
            [['created_date', 'updated_date'], 'safe'],
            [['id_user'], 'integer'],
            [['nama_matakuliah', 'kode_matakuliah'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_matakuliah' => 'Nama Matakuliah',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'id_user' => 'Id User',
            'kode_matakuliah' => 'Kode Matakuliah',
        ];
    }
}
