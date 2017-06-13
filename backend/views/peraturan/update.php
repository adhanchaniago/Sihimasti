<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Peraturan */

$this->title = 'Update Peraturan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Peraturans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peraturan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
