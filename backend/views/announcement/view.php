<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;
use backend\models\AnnouncementFile;

/* @var $this yii\web\View */
/* @var $model backend\models\Announcement */

$this->title = '';
$this->params['breadcrumbs'][] = ['label' => 'Announcements', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcement-view">
    <p>
        <!--<?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>-->
        <!--<?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>-->
    </p> 

    <center>
        <h2>
            <?= Html::encode($model->judul_pengumuman)?>
        </h2>
    </center>
    <br/>
    <div class="col-xs-12">
        <div class="box">
            <div class="box-body">
                <div class="box-body table-responsive no-padding">
                    <table id="example2" class="table table-bordered table-hover">
                        <?= $model->isi_pengumuman?>   
                    </table>  
                </div>
            </div>
        </div>
    </div>
    <?php if($modelFiles != null){?>
        <table>
            <thead>
                <th>Nama File:</th>
            </thead>
            <?php $announcementFile = AnnouncementFile::find()->where(['id_announcement' => $model->id])->all();
            foreach ($announcementFile as $file) {?>
                <tr>
                    <td><a href=<?= Yii::getAlias('@filelocation'). '/' . $file->nama_file?>><?= $file->nama_file?></td>    
                </tr>
            <?php }}?>
        </table>
        
</div>
