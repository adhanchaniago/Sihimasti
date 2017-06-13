<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\KeuanganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keuangans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keuangan-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php if(Yii::$app->user->can('pengurus-1')){?>
        <p>
            <?= Html::a('Create Keuangan', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php }?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'tanggal',
            'uraian',
            'pemasukan',
            'pengeluaran',
            'saldo',
            // 'id_user',
            // 'created_date',
            // 'updated_date',

            [
                'class' => 'yii\grid\ActionColumn',
                'visible' => Yii::$app->user->can('pengurus-1'),
            ],
        ],
    ]); ?>
</div>
