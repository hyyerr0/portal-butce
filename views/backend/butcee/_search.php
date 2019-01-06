<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ButceeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="butcee-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'butcee_id') ?>

    <?= $form->field($model, 'butcee_companyname') ?>

    <?= $form->field($model, 'butcee_income') ?>

    <?= $form->field($model, 'butcee_expense') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
