<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "member".
 *
 * @property integer $id
 * @property string $nama
 * @property string $nim
 * @property string $gender
 * @property string $angkatan
 * @property string $alamat
 * @property string $agama
 * @property string $telepon
 * @property integer $id_user
 *
 * @property User $idUser
 */
class Member extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'member';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'nim', 'gender', 'angkatan', 'alamat', 'agama', 'telepon', 'id_user'], 'required'],
            [['alamat'], 'string'],
            [['id_user'], 'integer'],
            [['nama'], 'string', 'max' => 64],
            [['nim', 'telepon'], 'string', 'max' => 15],
            [['gender'], 'string', 'max' => 1],
            [['angkatan'], 'string', 'max' => 5],
            [['agama'], 'string', 'max' => 10],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'nim' => 'Nim',
            'gender' => 'Gender',
            'angkatan' => 'Angkatan',
            'alamat' => 'Alamat',
            'agama' => 'Agama',
            'telepon' => 'Telepon',
            'id_user' => 'Id User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(User::className(), ['id' => 'id_user']);
    }
}
