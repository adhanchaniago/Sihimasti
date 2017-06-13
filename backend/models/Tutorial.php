<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tutorial".
 *
 * @property integer $id
 * @property string $topik
 * @property string $tutor
 * @property string $lokasi
 * @property string $tanggal_pelaksanaan
 * @property string $created_date
 * @property string $updated_date
 * @property integer $id_user
 * @property string $keterangan
 * @property integer $id_matakuliah
 *
 * @property MataKuliah $idMatakuliah
 */
class Tutorial extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'tutorial';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topik', 'tutor', 'lokasi', 'tanggal_pelaksanaan', 'created_date', 'updated_date', 'keterangan', 'id_matakuliah'], 'required'],
            [['tanggal_pelaksanaan', 'created_date', 'updated_date'], 'safe'],
            [['id_user', 'id_matakuliah'], 'integer'],
            [['keterangan'], 'string'],
            [['topik', 'tutor', 'lokasi'], 'string', 'max' => 255],
            [['id_matakuliah'], 'exist', 'skipOnError' => true, 'targetClass' => MataKuliah::className(), 'targetAttribute' => ['id_matakuliah' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'topik' => 'Topik',
            'tutor' => 'Tutor',
            'lokasi' => 'Lokasi',
            'tanggal_pelaksanaan' => 'Tanggal Pelaksanaan',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'id_user' => 'Id User',
            'keterangan' => 'Keterangan',
            'id_matakuliah' => 'Id Matakuliah',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdMatakuliah()
    {
        return $this->hasOne(MataKuliah::className(), ['id' => 'id_matakuliah']);
    }
}
