<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tutorial */

$this->title = 'Create Tutorial';
$this->params['breadcrumbs'][] = ['label' => 'Tutorials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutorial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'modelFiles' => $modelFiles,
    ]) ?>

</div>
