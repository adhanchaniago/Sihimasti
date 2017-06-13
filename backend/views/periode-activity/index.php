<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PeriodeActivitySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Periode Activities';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periode-activity-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Periode Activity', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id_activity',
            'name_activity',
//            'desc_activity:ntext',
            'time_activity',
            'status',
            // 'created_time',
            // 'updated_time',
            // 'id_periode',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
