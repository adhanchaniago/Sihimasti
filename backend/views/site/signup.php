<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */
//$this->context->layout = "blank";
$this->title = 'Sign Up';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="register-box">
    <div class="register-logo">
        <h1><?= Html::encode($this->title) ?></h1>
    </div><!-- /.login-logo -->
    
    <div class="register-box-body">
    <p class="login-box-msg">Please fill out the following fields to sign up.</p>
    <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        
        <?= $form->field($model, 'nama', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span></div>',
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('nama'),
            ],
        ])->label(false) ?>

        <?= $form->field($model, 'nim', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span></div>',
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('nim'),
            ],
        ])->label(false) ?>
       

        <?= $form->field($model, 'gender', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span></div>',
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('gender'),
            ],
        ])->label(false) ?>
       

        <?= $form->field($model, 'angkatan', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span></div>',
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('angkatan'),
            ],
        ])->label(false) ?>


        <?= $form->field($model, 'agama', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span></div>',
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('agama'),
            ],
        ])->label(false) ?>
       

        <?= $form->field($model, 'alamat', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span></div>',
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('alamat'),
            ],
        ])->label(false) ?>
       

        <?= $form->field($model, 'telepon', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span></div>',
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('telepon'),
            ],
        ])->label(false) ?>
       

        <?= $form->field($model, 'username', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span></div>',
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('username'),
            ],
        ])->label(false) ?>

        <?= $form->field($model, 'email', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span></div>',
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('email'),
            ],
        ])->label(false) ?>
        
        <?= $form->field($model, 'password', [
            'inputTemplate' => '<div class="input-group">{input}<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span></div>',
            'inputOptions' => [
                'placeholder' => $model->getAttributeLabel('password'),
            ],
        ])->passwordInput()->label(false) ?>
        
        <div class="row">            
            <div class="col-xs-4">
             <center></center>> <?= Html::submitButton('Sign Up', ['class' => 'btn btn-primary btn-flat pull-right', 'name' => 'signup-button']) ?>
            </div><!-- /.col -->
        </div>
    <?php ActiveForm::end(); ?> 
      
    <div style="color:#999;margin:1em 0">
        <?= Html::a('Have an account', ['site/login']) ?>.<br>        
    </div>
    
    </div>
</div>

?>