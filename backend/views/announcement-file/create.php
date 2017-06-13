<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AnnouncementFile */

$this->title = 'Create Announcement File';
$this->params['breadcrumbs'][] = ['label' => 'Announcement Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="announcement-file-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
