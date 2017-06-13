<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\MemberSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Members';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="member-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(Yii::$app->user->can('admin')){?>
    <p>
        <?= Html::a('Create Member', ['site/signup'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php }?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'nama',
                'format' => 'raw',
                'value' => function($model, $key, $index){
                    return Html::a($model->nama, Url::to(['view', 'id' => $model->id]));
                }
            ],
            'nim',
            'gender',
            'angkatan',
            // 'alamat:ntext',
            // 'agama',
            // 'telepon',
            // 'id_user',
            [
                'class' => 'yii\grid\ActionColumn',
                'visible' => Yii::$app->user->can('admin'),
            ],
        ],
    ]); ?>
</div>
