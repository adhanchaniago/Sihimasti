<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Keuangan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Keuangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keuangan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if(Yii::$app->user->can('pengurus-1')){?>
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
    <?php }?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'tanggal',
            'uraian',
            'pemasukan',
            'pengeluaran',
            'saldo',
            'id_user',
            'created_date',
            'updated_date',
        ],
    ]) ?>

</div>
