<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vaccination */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vaccination-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDvaccine')->textInput() ?>

    <?= $form->field($model, 'VaccinationDate')->textInput() ?>

    <?= $form->field($model, 'IDpet')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
