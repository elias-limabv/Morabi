<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */

/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';
?>
<br><br>
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"
                  style="background-size: contain; background-repeat: no-repeat; background-image: url('https://img.freepik.com/vector-gratis/ilustracion-vector-concepto-abstracto-prestamos-dinero-pequenos-prestamistas-dinero-prestamos-particulares-financiacion-corto-plazo-credito-bancario-comercial-e-industrial-metafora-abstracta-capital-trabajo_335657-2927.jpg?w=2000')"></div>
    <div class="col-lg-6">
        <div class="p-5">
            <br>
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Portal Crédito</h1>
            </div>
            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'options' => ['class' => 'user']
            ]); ?>

            <?= $form->field($model, 'username', [
                'inputOptions' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Enter your username'
                ]
            ])->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password', [
                'inputOptions' => [
                    'class' => 'form-control form-control-user',
                    'placeholder' => 'Enter your password'
                ]
            ])->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>
            <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'login-button']) ?>
            <hr>
            <?php ActiveForm::end() ?>
           
            <div class="text-center">
             <a class="small" href="<?php echo \yii\helpers\Url::to(['/site/forgot-password']) ?>">Esqueceu a senha?</a>
            </div>
            <div class="text-center">
            <a class="small" href="<?php echo \yii\helpers\Url::to(['/site/register']) ?>">Criar nova Conta</a>
            </div>            
             
        </div>
    </div>
</div>