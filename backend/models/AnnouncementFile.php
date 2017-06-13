<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "announcement_file".
 *
 * @property integer $id
 * @property string $nama_file
 * @property integer $id_announcement
 */
class AnnouncementFile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public $files;
    
    public static function tableName()
    {
        return 'announcement_file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_file', 'id_announcement'], 'required'],
            [['id_announcement'], 'integer'],
            [['nama_file'], 'string', 'max' => 255],
            [['files'], 'file', 'maxFiles' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_file' => 'Nama File',
            'id_announcement' => 'Id Announcement',
        ];
    }
}
