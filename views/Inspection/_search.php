<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\InspectionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inspection-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDinspection') ?>

    <?= $form->field($model, 'IDpet') ?>

    <?= $form->field($model, 'InspectionDate') ?>

    <?= $form->field($model, 'IDcity') ?>

    <?= $form->field($model, 'Street') ?>

    <?php // echo $form->field($model, 'Building') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
