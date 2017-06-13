<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "peraturan".
 *
 * @property integer $id
 * @property string $nama_peraturan
 * @property string $nama_file
 * @property string $created_date
 * @property string $updated_date
 * @property integer $id_user
 */
class Peraturan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $file;
    public static function tableName()
    {
        return 'peraturan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_peraturan', 'nama_file', 'created_date', 'updated_date', 'id_user'], 'required'],
            [['created_date', 'updated_date'], 'safe'],
            [['id_user'], 'integer'],
            [['nama_peraturan', 'nama_file'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_peraturan' => 'Nama Peraturan',
            'nama_file' => 'Nama File',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
            'id_user' => 'Id User',
        ];
    }
}
