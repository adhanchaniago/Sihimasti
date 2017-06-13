<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Announcement */

$this->title = 'Update Announcement: ' . $model->judul_pengumuman;
$this->params['breadcrumbs'][] = ['label' => 'Announcements', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="announcement-update">
    <?= $this->render('_form', [
        'model' => $model,
        'modelFiles' => $modelFiles,
    ]) ?>

</div>
