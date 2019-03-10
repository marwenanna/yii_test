<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Регистрация';

?>
<div class="site-signup">
    <hr>
    <h2><?= Html::encode($this->title) ?></h2>
    <hr>


        <div class="container">

            <?php $form = ActiveForm::begin([
                    'id' => 'form-signup'

            ]); ?>

                <?= $form->field($model, 'username')->textInput([
                        'placeholder' => 'Введите логин',
                        'required' => true,
                        'id' => 'username',
                        'minlength' => 3,
                        'maxLength' => 20,
                        'autofocus' => true


                ])->label('Логин:') ?>

                <?= $form->field($model, 'email')->textInput([
                        'placeholder' => 'Введите адрес электронной почты',
                        'required' => true,
                        'id' => 'email',
                        'pattern' =>'[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$',
                        'maxLength' => 255,
                        'autofocus' => true


                ])->label('Емейл:') ?>

                <?= $form->field($model, 'password')->passwordInput([
                        'placeholder' => 'Введите ваш пароль',
                        'required' => true,
                        'id' => 'password',
                         'minlength' => 6,
                         'maxLength' => 16,
                         'autofocus' => true

                ])->label('Пароль:') ?>

                <?= $form->field($model, 'confirm_password')->passwordInput([
                        'placeholder' => 'Повторите ваш пароль',
                        'required' => true,
                        'id'=> 'confirm_password',
                        'autofocus' => true

                ])->label('Повтор пароля:') ?>

                <div class="form-group">
                    <?= Html::submitButton('Регистрировать', ['class' => 'btn btn-primary', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>

    </div>
</div>


<?php
$script = <<< JS
var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Повторить пароль чтобы все символы совпадали с первым");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
JS;
$this->registerJs($script);
?>
