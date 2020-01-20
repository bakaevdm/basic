<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vaccine */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vaccine-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'VaccineName')->textInput() ?>

    <?= $form->field($model, 'Period')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
