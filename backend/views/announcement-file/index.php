<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AnnouncementFileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Announcement Files';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcement-file-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Announcement File', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nama_file',
            'id_announcement',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
