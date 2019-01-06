<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Butcee */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="butcee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'butcee_companyname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'butcee_income')->textInput() ?>

    <?= $form->field($model, 'butcee_expense')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
