<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Procedures */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="procedures-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ProcedureName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Period')->textInput() ?>

    <?= $form->field($model, 'IDpet')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
