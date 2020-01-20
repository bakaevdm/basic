<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VaccinationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vaccination-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'IDvaccination') ?>

    <?= $form->field($model, 'IDvaccine') ?>

    <?= $form->field($model, 'VaccinationDate') ?>

    <?= $form->field($model, 'IDpet') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
