<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $model backend\models\MataKuliah */

$this->title = $model->kode_matakuliah;
$this->params['breadcrumbs'][] = ['label' => 'Mata Kuliahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mata-kuliah-view">

    <h1><?= Html::encode($this->title . ' - ' . $model->nama_matakuliah) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'kode_matakuliah',
            'nama_matakuliah',
            //'created_date',
            //'updated_date',
            //'id_user',
        ],
    ]) ?>

    <h1>Daftar Tutorial</h1>

    <br>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
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
