<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use backend\models\MataKuliah;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\TutorialSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tutorials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutorial-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tutorial', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                //'attribute' => 'id_matakuliah',
                'label' => 'Nama Mata Kuliah',
                'format' => 'raw',
                'value' => function($model){
                    return Html::a(MataKuliah::find()->where(['id' => $model->id_matakuliah])->one()->nama_matakuliah
                        , Url::to(['mata-kuliah/view', 'id' => $model->id_matakuliah]));
                }
            ],
            'topik',
            'tutor',
            'lokasi',
            'tanggal_pelaksanaan',
            // 'created_date',
            // 'updated_date',
            // 'id_user',
            // 'keterangan:ntext',
            // 'id_matakuliah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
