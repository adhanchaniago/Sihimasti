<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "periode_activity".
 *
 * @property integer $id_activity
 * @property string $name_activity
 * @property string $desc_activity
 * @property string $time_activity
 * @property integer $status
 * @property string $created_time
 * @property string $updated_time
 * @property integer $id_periode
 *
 * @property Periode $idPeriode
 */
class PeriodeActivity extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'periode_activity';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_activity', 'desc_activity', 'time_activity', 'status', 'created_time', 'updated_time', 'id_periode'], 'required'],
            [['desc_activity'], 'string'],
            [['time_activity', 'created_time', 'updated_time'], 'safe'],
            [['status', 'id_periode'], 'integer'],
            [['name_activity'], 'string', 'max' => 50],
            [['id_periode'], 'exist', 'skipOnError' => true, 'targetClass' => Periode::className(), 'targetAttribute' => ['id_periode' => 'id_periode']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_activity' => 'Id Activity',
            'name_activity' => 'Name Activity',
            'desc_activity' => 'Desc Activity',
            'time_activity' => 'Time Activity',
            'status' => 'Status',
            'created_time' => 'Created Time',
            'updated_time' => 'Updated Time',
            'id_periode' => 'Id Periode',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPeriode()
    {
        return $this->hasOne(Periode::className(), ['id_periode' => 'id_periode']);
    }
}
