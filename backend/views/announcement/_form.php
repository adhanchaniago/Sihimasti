<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Announcement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="announcement-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'judul_pengumuman')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isi_pengumuman')-> widget(\yii\redactor\widgets\Redactor::className()) ?>

    <?= $form->field($modelFiles, 'files[]')->fileInput(['multiple' => true])?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
