<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AnnouncementSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Announcements';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcement-index">
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(Yii::$app->user->can('pengurus-2')){?>
        <p>
            <?= Html::a('Create Announcement', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php }?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'judul_pengumuman',
                'format' => 'raw',
                'value' => function($model, $key, $index){
                    return Html::a($model->judul_pengumuman, Url::to(['view', 'id' => $model->id]));
                }
            ],
            
            //'isi_pengumuman:ntext',
            'created_date',
            'updated_date',
            // 'id_user',

            [
                'class' => 'yii\grid\ActionColumn',
                'visible' => Yii::$app->user->can('pengurus-2'),
            ],
        ],
    ]); ?>
</div>
