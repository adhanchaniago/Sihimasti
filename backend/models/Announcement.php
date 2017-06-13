<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "announcement".
 *
 * @property integer $id
 * @property string $judul_pengumuman
 * @property string $isi_pengumuman
 * @property string $created_date
 * @property string $updated_date
 * @property integer $id_user
 */
class Announcement extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'announcement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['judul_pengumuman', 'isi_pengumuman', 'created_date', 'updated_date', 'id_user'], 'required'],
            [['isi_pengumuman'], 'string'],
            [['created_date', 'updated_date'], 'safe'],
            [['id_user'], 'integer'],
            [['judul_pengumuman'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'judul_pengumuman' => 'Judul Pengumuman',
            'isi_pengumuman' => 'Isi Pengumuman',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'id_user' => 'Id User',
        ];
    }
}
