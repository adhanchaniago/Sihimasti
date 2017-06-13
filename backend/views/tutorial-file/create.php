<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TutorialFile */

$this->title = 'Create Tutorial File';
$this->params['breadcrumbs'][] = ['label' => 'Tutorial Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutorial-file-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
