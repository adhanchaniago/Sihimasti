<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tutorial_file".
 *
 * @property integer $id
 * @property string $nama_file
 * @property integer $size
 * @property integer $id_tutorial
 */
class TutorialFile extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $files;
    public static function tableName()
    {
        return 'tutorial_file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_file', 'size', 'id_tutorial'], 'required'],
            [['size', 'id_tutorial'], 'integer'],
            [['nama_file'], 'string', 'max' => 255],
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
            'size' => 'Size',
            'id_tutorial' => 'Id Tutorial',
        ];
    }
}
