<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Peraturan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Peraturans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peraturan-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
            'id',
            'nama_peraturan',
            'nama_file',
            'created_date',
            'updated_date',
            'id_user',
        ],
    ]) ?>

</div>
