<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "periode".
 *
 * @property integer $id_periode
 * @property string $name_periode
 * @property string $desc
 * @property integer $id_user
 *
 * @property User $idUser
 * @property PeriodeActivity[] $periodeActivities
 */
class Periode extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'periode';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_periode', 'desc', 'id_user'], 'required'],
            [['desc'], 'string'],
            [['id_user'], 'integer'],
            [['name_periode'], 'string', 'max' => 20],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id_user' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_periode' => 'Id Periode',
            'name_periode' => 'Name Periode',
            'desc' => 'Desc ',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodeActivities()
    {
        return $this->hasMany(PeriodeActivity::className(), ['id_periode' => 'id_periode']);
    }
}
