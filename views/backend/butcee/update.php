<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Butcee */

$this->title = 'Update Butcee: ' . $model->butcee_id;
$this->params['breadcrumbs'][] = ['label' => 'Butcees', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->butcee_id, 'url' => ['view', 'id' => $model->butcee_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="butcee-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
