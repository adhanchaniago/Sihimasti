<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model backend\models\PeriodeActivity */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="periode-activity-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name_activity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'desc_activity')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'time_activity')->widget(DateTimePicker::classname(), [
        'options' => ['placeholder' => 'Enter time activity'],
        'type' => DateTimePicker::TYPE_COMPONENT_APPEND,
        'layout' => '{input}{picker}{remove}',
        'pluginOptions' => [
            'orientation' => 'top left',
            'autoclose' => true,
            'format' => 'mm/dd/yyyy hh:ii:ss',
            'todayBtn' => true,
        ]
    ])
    ?>

<!--    --><?//=  ?><!--$form->field($model, 'status')->textInput()-->

<!--    --><?//=  ?><!--$form->field($model, 'created_time')->textInput()-->

<!--    --><?//=  ?><!--$form->field($model, 'updated_time')->textInput()-->

<!--    --><?//=  ?><!--$form->field($model, 'id_periode')->textInput()-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
