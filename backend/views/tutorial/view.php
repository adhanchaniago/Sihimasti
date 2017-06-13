<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Tutorial */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tutorials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutorial-view">

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
            //'id',
            'id_matakuliah',
            'topik',
            'tutor',
            'lokasi',
            'tanggal_pelaksanaan',
            //'created_date',
            //'updated_date',
            //'id_user',
            'keterangan:ntext',
            
        ],
    ]) ?>

    <?php if($modelFiles != null){?>
        <table>
            <thead>
                <th>Nama File:</th>
            </thead>
            <?php foreach ($modelFiles as $file) {?>
                <tr>
                    <td><a href=<?php Yii::getAlias('@filelocation'). '/' . $file->nama_file?>><?= $file->nama_file?></a></td>
                </tr> 
            <?php }?>
    <?php }?>
        </table>


</div>
