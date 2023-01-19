<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \frontend\models\SignupForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">

 <br><br>
<div class="row">
    <div class="col-lg-6 d-none d-lg-block bg-login-image"
                  style="background-size: contain; background-repeat: no-repeat; background-image: url('https://img.freepik.com/vector-gratis/ilustracion-vector-concepto-abstracto-prestamos-dinero-pequenos-prestamistas-dinero-prestamos-particulares-financiacion-corto-plazo-credito-bancario-comercial-e-industrial-metafora-abstracta-capital-trabajo_335657-2927.jpg?w=2000')"></div>
    <div class="col-lg-6">
            <h1><?= Html::encode($this->title) ?></h1>
            <p>Please fill out the following fields to signup:</p>
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <div class="row">
                    <div class="col-md-6">
                       <?= $form->field($model, 'firstname')->textInput(['autofocus' => true]) ?>
                    </div>
                    <div class="col-md-6">
                      <?= $form->field($model, 'lastname')->textInput(['autofocus' => true]) ?>     
                    </div>
                </div>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
            <?= Html::submitButton('Signup', ['class' => 'btn btn-primary btn-user btn-block', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>