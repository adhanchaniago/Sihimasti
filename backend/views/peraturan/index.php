<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PeraturanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Peraturans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peraturan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(Yii::$app->user->can('pengurus-2')){?>
        <p>
            <?= Html::a('Create Peraturan', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php }?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'nama_peraturan',
                'format' => 'raw',
                'value' => function($model, $key, $index){
                    return Html::a($model->nama_peraturan, Url::to(Yii::getAlias('@filelocationperaturan'). '/'. $model->nama_file));
                }
            ],
            //'nama_file',
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
