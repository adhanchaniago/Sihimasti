<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PeriodeActivity */

$this->title = $model->id_activity;
$this->params['breadcrumbs'][] = ['label' => 'Periode Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="periode-activity-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_activity], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_activity], [
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
            'id_activity',
            'name_activity',
            'desc_activity:ntext',
            'time_activity',
            'status',
            'created_time',
            'updated_time',
            'id_periode',
        ],
    ]) ?>

</div>
