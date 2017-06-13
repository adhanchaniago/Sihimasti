<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\MataKuliah;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;
/* @var $this yii\web\View */
/* @var $model backend\models\Tutorial */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tutorial-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_matakuliah')->dropDownList(
    ArrayHelper::map(MataKuliah::find()->all(), 'id', 'nama_matakuliah'), ['prompt' => 'Pilih Mata Kuliah']) ?>

    <?= $form->field($model, 'topik')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tutor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lokasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_pelaksanaan')->widget(DateTimePicker::className()) ?>

    <?= $form->field($model, 'keterangan')->textarea(['rows' => 6]) ?>

    <?= $form->field($modelFiles, 'files[]')->fileInput(['multiple' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
