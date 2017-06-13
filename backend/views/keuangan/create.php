<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Keuangan */

$this->title = 'Create Keuangan';
$this->params['breadcrumbs'][] = ['label' => 'Keuangans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="keuangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
