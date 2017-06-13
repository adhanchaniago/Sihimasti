<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PeriodeActivity */

$this->title = 'Update Periode Activity: ' . $model->id_activity;
$this->params['breadcrumbs'][] = ['label' => 'Periode Activities', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_activity, 'url' => ['view', 'id' => $model->id_activity]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="periode-activity-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
