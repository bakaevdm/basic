<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inspection */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inspection-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'IDpet')->textInput() ?>

    <?= $form->field($model, 'InspectionDate')->textInput() ?>

    <?= $form->field($model, 'IDcity')->textInput() ?>

    <?= $form->field($model, 'Street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Building')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
