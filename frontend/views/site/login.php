<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Логин';
?>
<div class="site-login">
    <hr>
    <h2><?= Html::encode($this->title) ?></h2>
    <hr>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput([
                'placeholder' => 'Enter your username',
                'required' => true,
                'id' => 'username',
                'minlength' => 3,
                'maxLength' => 20,
                'autofocus' => true


            ])->label('Логин:') ?>

            <?= $form->field($model, 'password')->passwordInput([
                'placeholder' => 'Enter your password',
                'required' => true,
                'id' => 'password',
                'minlength' => 6,
                'maxLength' => 16,
                'autofocus' => true

            ])->label('Пароль:') ?>



                <div class="form-group">
                    <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
