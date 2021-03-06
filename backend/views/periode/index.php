<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PeriodeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Periodes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periode-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Periode', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id_periode',
            'name_periode',
//            'desc:ntext',
//            'id_user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
