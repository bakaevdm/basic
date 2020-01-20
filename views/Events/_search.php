<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EventsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="events-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDevent') ?>

    <?= $form->field($model, 'EventName') ?>

    <?= $form->field($model, 'EventDate') ?>

    <?= $form->field($model, 'IDcity') ?>

    <?= $form->field($model, 'Street') ?>

    <?php // echo $form->field($model, 'Building') ?>

    <?php // echo $form->field($model, 'IDpet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
