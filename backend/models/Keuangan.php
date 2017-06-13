<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "keuangan".
 *
 * @property integer $id
 * @property string $tanggal
 * @property string $uraian
 * @property double $pemasukan
 * @property double $pengeluaran
 * @property double $saldo
 * @property integer $id_user
 * @property string $created_date
 * @property string $updated_date
 */
class Keuangan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keuangan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tanggal', 'uraian', 'pemasukan', 'pengeluaran', 'saldo', 'id_user', 'created_date', 'updated_date'], 'required'],
            [['tanggal', 'created_date', 'updated_date'], 'safe'],
            [['pemasukan', 'pengeluaran', 'saldo'], 'number'],
            [['id_user'], 'integer'],
            [['uraian'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tanggal' => 'Tanggal',
            'uraian' => 'Uraian',
            'pemasukan' => 'Pemasukan',
            'pengeluaran' => 'Pengeluaran',
            'saldo' => 'Saldo',
            'id_user' => 'Id User',
            'created_date' => 'Created Date',
            'updated_date' => 'Updated Date',
        ];
    }

    public static function getNextOrPrevId($currentId, $nextOrPrev)
    {
        $records=NULL;
        if($nextOrPrev == "prev")
           $records=Keuangan::find()->orderBy(['id' => SORT_DESC])->all();
        if($nextOrPrev == "next")
           $records=Keuangan::find()->orderBy(['id' => SORT_ASC])->all();

        

        foreach($records as $i=>$r)
           if($r->id != $currentId)
              return $r;

        return NULL;
    }
}
